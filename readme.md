# Laravel UUID Trait

Enable auto fill of uuid field to Laravel Models and enable find by uuid function

## Installation

```bash

composer require eng_assys/laravel-uuid-trait

```

## Usage

On your laravel Model

``` php
namespace App\Models;

use LaravelUuid\Traits\Uuid;

use Illuminate\Database\Eloquent\Model;

class User extends Model 
{
    use Uuid;

```