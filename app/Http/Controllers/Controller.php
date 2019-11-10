<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $data = [];

    function login()
    {
        $tittle = "Login";
        $h1 = "Tela de Login";
        return view('login', [
            'tittle' => $tittle,
            'h1' => $h1
        ]);
    }

    function home()
    {
        $tittle = "Home";
        $uriLogin = "/login";
        return view('welcome', [
            'tittle' => $tittle,
            'uriLogin' => $uriLogin
        ]);
    }

    static function header()
    {
      return http_parse_headers('<header class="form-group">
            <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
                <a class="navbar-brand" href="#">
                    <img src="images/logo.f90eb6b0.png" height="30" alt="">
                </a>
                <button class="navbar-toggler"
                        type="button"
                        data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle"
                               href="#" id="navbarDropdown"
                               role="button"
                               data-toggle="dropdown"
                               aria-haspopup="true"
                               aria-expanded="false">
                                Menu
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/login">Tela de Login</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Minha Lista</a>
                        </li>
                    </ul>
                    <form class="form-inline  input-group-sm my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                        <button id="btn-search" class="btn btn-outline-light btn-sm my-2 my-sm-0" type="button">Buscar</button>
                    </form>
                    <div class="media">
                        <div class="media-body text-light" style="padding-left: 30px">
                            Leandro
                        </div>
                        <img src="images/defaultUser.png" width="30px" height="30px" class="ml-3" alt="User Image">
                    </div>
                </div>
            </nav>
        </header>');
    }
}
