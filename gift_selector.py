import sys

# Lista de regalos predefinidos
gifts = [
    "Book", "Toy", "Gadget", "Video Game", "Headphones", 
    "Smartphone", "Laptop", "Watch", "Shoes", "Wallet", 
    "Headset", "Camera", "Drone", "Smart Watch", "Bluetooth Speaker"
]

def main():
    # Obtener los argumentos pasados desde PHP
    if len(sys.argv) < 2:
        print("No indices provided.")
        return
    
    indices = sys.argv[1]
    try:
        selected_indices = list(map(int, indices.split(',')))
    except ValueError:
        print("Invalid input. Please enter valid indices separated by commas.")
        return

    # Validar índices
    if any(i < 0 or i >= len(gifts) for i in selected_indices):
        print("One or more indices are out of range. Please try again.")
        return

    # Calcular el código único usando OR bit a bit
    gift_code = 0
    for idx in selected_indices:
        gift_code |= (1 << idx)
    
    # Generar la salida
    selected_gifts = ", ".join(gifts[idx] for idx in selected_indices)
    print("Webserver 1:")
    print("Available Gifts:")
    for idx, gift in enumerate(gifts):
        print(f"{idx}: {gift}")
    print(f"Enter gift indices separated by commas (e.g., 0, 2): {indices}")
    print(f"Selected Gifts: {selected_gifts}")
    print(f"Unique Gift Code: {gift_code}")

if __name__ == "__main__":
    main()
