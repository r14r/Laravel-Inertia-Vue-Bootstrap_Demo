#!/usr/bin/env python


import os
import sys
from bs4 import BeautifulSoup

def extract_style_and_body_from_vue(file_path):
    # Open and read the .vue file
    with open(file_path, 'r', encoding='utf-8') as file:
        content = file.read()

    # Parse the file content
    soup = BeautifulSoup(content, 'html.parser')

    # Extract the <style> tag
    style = ''
    header = soup.find('header')
    if header:
        style_tag = header.find('style')
        if style_tag:
            style = str(style_tag)

    # Wrap the extracted header in <template> tags
    header_content = f'<template>{str(header)}</template>' if header else ''

    # Extract the body content (if exists)
    body = soup.find('body')
    body_content = str(body) if body else ''

    return style, header_content, body_content

def parse_vue_files_in_directory(directory):
    # Traverse the directory and subdirectories
    for root, dirs, files in os.walk(directory):
        for file in files:
            if file.endswith('.html'):
                file_name = os.path.splitext(file)[0]
                file_path = os.path.join(root, file)
                print(f"Processing file: {file_path}")
                
                # Extract the style, wrapped header, and body from the .vue file
                style, wrapped_header, body_content = extract_style_and_body_from_vue(file_path)


                content= "<style>" + style + "</style>" + "\n" + "<template>" + body_content + "</template>"

                output=f"{root}/{file_name}.vue"
                with open(output, "w") as f:
                    f.write(content)

                print(output)


if __name__ == '__main__':
    if len(sys.argv) != 2:
        print("Usage: python script.py <directory>")
        sys.exit(1)

    folder_path = sys.argv[1]

    # Check if the provided path is valid
    if not os.path.isdir(folder_path):
        print(f"The provided directory '{folder_path}' does not exist or is not a valid directory.")
        sys.exit(1)

    # Parse the .vue files in the provided directory
    parse_vue_files_in_directory(folder_path)
