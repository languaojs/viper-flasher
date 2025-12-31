# Viper Flasher 🐍

A lightweight PHP library to handle flash messages using **SweetAlert2** toasts. Originally built for the ViperPHP framework, but compatible with any PHP project.

## 🚀 Installation

Install the package via Composer:

```bash
composer require languaojs/viper-flasher
```
If you are using ViperPHP, run the command above in the root folder of your project.

## 📋 Requirements

This library requires jQuery and SweetAlert2 to be present in your HTML template. Add these CDNs to your header or footer:
```HTML
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
```
If you are using ViperPHP, you will configure these assets in your controller (see ViperPHP documentation in my GitHub repo).

## 🛠 Usage
### 1. Initialize Session
Ensure that session_start() is called at the beginning of your application.

### 2. Set a Flash Message
Use the setFlash method in your Controller or logic:
```PHP
use Viper\Flasher\Flasher;

// Parameters: type (success, error, info, warning), message
Flasher::setFlash('success', 'Data saved successfully!');
```
### 3. Fire the Flash Message
Call the flash() method in your view (ideally at the bottom of the body):
```PHP
<?php 
use Viper\Flasher\Flasher;

Flasher::flash(); 
?>
```
## 🎨 Toast Configuration
By default, this library uses a SweetAlert2 Toast with the following settings:
* Position: Top-end
* Timer: 5000ms
* Progress Bar: Enabled
* Confirm Button: Disabled

## 📜 License
This project is licensed under the MIT License.

Created by Zainurrahman