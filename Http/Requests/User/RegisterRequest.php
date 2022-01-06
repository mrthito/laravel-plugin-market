<?php
namespace Plugins\PluginMarket\Http\Requests\User;

use Plugins\PluginMarket\Http\Requests\Request;

class RegisterRequest extends Request
{
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:market_users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ];
    }
}