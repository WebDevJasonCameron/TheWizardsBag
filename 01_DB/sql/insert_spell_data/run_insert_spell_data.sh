#!/bin/bash

# Set the path to the postgresql file directory
FILES_DIR="/Users/jasoncameron/Herd/TheWizardsBag/01_DB/sql/run_sql"

# Loop through the files and execute them
for FILE in "$FILES_DIR"/*.sql;
  do
    echo "Running $FILE..."
    /Applications/Postgres.app/Contents/Versions/14/bin/psql -U smash -d wizards_db -a -f "$FILE"
  done

echo "Database setup complete!"
