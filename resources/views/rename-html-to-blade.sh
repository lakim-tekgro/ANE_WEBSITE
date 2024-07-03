#!/bin/bash

# Function to rename files in a directory
rename_files() {
    echo "Renaming files in directory: $1"
    for file in "$1"/*.html; do
        if [ -f "$file" ]; then
            new_name="${file%.html}.blade.php"
            echo "Renaming $file to $new_name"
            mv -- "$file" "$new_name"
        else
            echo "No .html files found in $1"
        fi
    done
}

# List of directories to process
directories=(
    "campus"
    "courses/child-care"
    "courses/health-services"
    "courses/hospitality"
    "courses/leadership"
    "courses/technology"
    "events"
    "pages"
)

# Rename files in each directory
for dir in "${directories[@]}"; do
    rename_files "$dir"
done
