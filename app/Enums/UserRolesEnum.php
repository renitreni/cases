<?php 
namespace App\Enums;

enum UserRolesEnum: string 
{
    case ADMIN = 'admin';
    case USER = 'employee';
}