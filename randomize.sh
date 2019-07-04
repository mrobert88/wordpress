#!/bin/bash

function checkNumber {
    if [[ $1 -gt $2 ]]; then
	echo "The secret number is smaller!"
    elif [[ $1 -lt $2 ]]; then
	echo "The secret number is greater!"
    fi
	
}

number=$((1 + RANDOM % 10))

read -p "Guess the number:" guess
#printf "Guess:"$guess" number:"$number
while [[ $guess -ne $number ]]; do
    checkNumber $guess $number
    read -p "Guess the number:" guess
done
echo
echo "Congrats! You have guessed the number!"