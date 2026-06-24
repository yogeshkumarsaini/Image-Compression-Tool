# Image Compression Tool

A simple PHP-based Image Compression Tool that allows users to upload JPG, PNG, and WebP images, compress them with adjustable quality settings, and download the optimized image.

## Features

* Upload JPG, PNG, and WebP images
* Adjustable compression quality
* Download compressed images
* Display original and compressed file sizes
* Lightweight and easy to use
* Built with PHP and GD Library

## Technologies Used

* PHP
* HTML5
* CSS3
* JavaScript
* GD Library

## Project Structure

```
Image-Compression-Tool/
│
├── index.php
├── compress.php
├── download.php
├── uploads/
├── compressed/
├── assets/
│   ├── style.css
│   └── script.js
│
└── README.md
```

## Installation

1. Clone the repository:

```bash
git clone https://github.com/yogeshkumarsaini/Image-Compression-Tool.git
```

2. Move the project to your web server directory.

3. Enable the GD extension in PHP:

```ini
extension=gd
```

4. Create the following folders:

```text
uploads/
compressed/
```

5. Start Apache and open:

```text
http://localhost/Image-Compression-Tool
```

## Requirements

* PHP 8.0+
* Apache/Nginx
* GD Extension Enabled

## How It Works

1. Upload an image.
2. Select compression quality.
3. Click "Compress Image".
4. Download the optimized image.
5. Compare original and compressed sizes.
