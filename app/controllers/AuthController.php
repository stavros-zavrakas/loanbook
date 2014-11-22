<?php

class AuthController extends BaseController {
  public function logout() {
    Session::flush();
    return Redirect::to('/');
  }

}
