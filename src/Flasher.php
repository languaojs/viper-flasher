<?php

namespace Viper\Flasher;

/**
 * A flasher class for ViperPHP and other PHP frameworks;
 * @package Viper\Flasher;
 * @author Zainurrahman <umangternate@gmail.com>;
 * @license MIT;
 * @version 0.1.0;
 * Requires: Sweetalert2 and jQuery;
 */

class Flasher
{
    /**
     * Set flash message (Sweetalert2)
     * @param string $type (success, error, info, warning)
     * @param string $message
     */
    public static function setFlash($type, $message)
    {
        $_SESSION['flash'] = [
            'type' => $type,
            'message' => $message
        ];
    }

    /**
     * Fire the flash message
     */
    public static function flash()
    {
        if (isset($_SESSION['flash'])) {
            $message = addslashes($_SESSION['flash']['message']);
            $type = $_SESSION['flash']['type'];
            
            echo
            "
            <script>
                $(function() {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 5000,
                        timerProgressBar: true,
                    });
                    Toast.fire({
                        icon: '{$type}',
                        title: '{$message}',     
                    });
                });
            </script>
            
            ";
            unset($_SESSION['flash']);
        }
    }
}
