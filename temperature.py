import sys

def fahrenheit_to_celsius(fahrenheit):
    return (fahrenheit - 32) * 5 / 9

if __name__ == "__main__":
    if len(sys.argv) != 2:
        print("Error: One temperature value is required.")
        sys.exit(1)

    try:
        fahrenheit = float(sys.argv[1])
    except ValueError:
        print("Error: Please enter a valid number.")
        sys.exit(1)

    celsius = fahrenheit_to_celsius(fahrenheit)

    print(f"{fahrenheit:g} F is {celsius:.2f} C.")
