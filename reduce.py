from PIL import Image
import os

# Function to resize images in a directory and save them into another directory
def resize_images(input_directory, output_directory):
    # Create output directory if it doesn't exist
    if not os.path.exists(output_directory):
        os.makedirs(output_directory)
    
    # List all files in the input directory
    for filename in os.listdir(input_directory):
        # Check if the file is an image
        if filename.endswith(".jpg") or filename.endswith(".png") or filename.endswith(".jpeg"):
            # Open the image
            input_image_path = os.path.join(input_directory, filename)
            img = Image.open(input_image_path)
            
            # Get original dimensions
            width, height = img.size
            
            # Resize the image to 50% of its original size
            new_width = int(width * 0.5)
            new_height = int(height * 0.5)
            resized_img = img.resize((new_width, new_height), Image.ANTIALIAS)
            
            # Save the resized image to the output directory with the same filename
            output_image_path = os.path.join(output_directory, filename)
            resized_img.save(output_image_path)

# Directory containing the original images
input_image_directory = "images"

# Directory to save the resized images
output_image_directory = "images3"

# Resize images in the input directory and save them into the output directory
resize_images(input_image_directory, output_image_directory)
