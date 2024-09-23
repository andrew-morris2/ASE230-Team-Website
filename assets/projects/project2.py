#!/usr/bin/python


import csv
import subprocess
import argparse
import time
import random
import string


# This script accept the path of csv file with employee data and create users based on it and create csv with info back.
# Hassan Alsaffar (Alsaffarh1) , Andrew Morris (morrisa31) , Alykaa Salaah (salaaha2)


# function to read data from csv file and return data in a list
def read_file(filename):
    records = []
    with open(filename, 'r') as file:
        reader = csv.reader(file)
        next(reader)  # skip header
        for row in reader:
            records.append(row)
    return records


# function to create groups based on the 3rd value from the list above
def create_groups(records):
    user_group = set(record[2] for record in records)
    for group in user_group:
        subprocess.run(['groupadd', group])


# function to generate a random password
def generate_passwd():
    charset = string.ascii_lowercase + string.ascii_uppercase + string.punctuation + string.digits
    count = random.randint(10, 20)
    pwd = ""
    for char_index in range(count):
        next_char = random.choice(charset)
        while next_char in pwd:
            next_char = random.choice(charset)

        pwd += next_char
    return pwd


# function to create a username based on first and last name and existing usernames
def make_username(first_name, last_name, exist_user):
    org_username = last_name + first_name[0]
    username = org_username
    suffix = 1
    while username in exist_user:
        username = f"{org_username}{suffix}"
        suffix += 1
    return username


# function to check if username already in the system
def duplicate_user(username):
    with open('/etc/passwd', 'r') as file:
        return any(username == line.split(':')[0] for line in file)


# function to create the user at the command line and put the full name and group
def create_user(username, full_name, user_group):
    password = generate_passwd()

    if not duplicate_user(username):
        subprocess.run(['useradd', '-c', full_name, '-G', user_group, '-p', password, username])
    else:
        print(f"heads up: user account with name of '{username}' already exists")


# function to write user data to csv file
def write_csv(output_file, data):
    with open(output_file, 'w', newline='') as file:
        writer = csv.writer(file)
        writer.writerow(['First Name', 'Last Name', 'Username', 'Password'])
        for record in data:
            writer.writerow(record)


# function to log the execution of the program
def log_file(logfile_name):
    timestamp = time.time_ns()
    log_text = f"this program been executed at {timestamp}"
    with open(logfile_name, 'a') as file:
        file.write(log_text)


# function to process user account info, create users, and generate output file with csv
def user_account_info(records, output_filename):
    exist_user = set()
    user_data = []

    for record in records:
        first_name, last_name, user_group = record[0], record[1], record[2]
        full_name = f"{last_name}{first_name}"
        username = make_username(first_name, last_name, exist_user)

        create_user(username, full_name, user_group)

        exist_user.add(username)
        password = generate_passwd()
        user_data.append([first_name, last_name, username, password])

    write_csv(output_filename, user_data)


# main function with the parse arguments and execute the program
def main():
    parser = argparse.ArgumentParser(
        add_help=True,
        description="This program create user account from csv file and create csv file with the new information",
        usage="final_proj_10_part2.py E_FILE_PATH  OUTPUT_FILE_PATH [-l logfile_name]"
    )
    parser.add_argument('E_FILE_PATH', help='Path to the employee file')
    parser.add_argument('OUTPUT_FILE_PATH', help="Path to output file")
    parser.add_argument('-l', '--log', dest='logfile_name', required=True, help="logfile name")

    args = parser.parse_args()

    records = read_file(args.E_FILE_PATH)
    create_groups(records)
    user_account_info(records, args.OUTPUT_FILE_PATH)
    log_file(args.logfile_name)


if __name__ == "__main__":
    main()
