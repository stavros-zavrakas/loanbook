<?php

class SocialController extends BaseController {

  public function facebook() {
    $protocol = (Request::secure())? 'https://' : 'http://';
    
    $clientId = "315771875297622";
    $clientSecret = "88a2714f4ae20f3724cb8681f5cd2d2f";
    $scope = "email, public_profile, user_friends";
    
    $oauth_consumer = new SocialOauth\SocialFacebookOauth();
    
    // @todo: why the config is not working?
    // $oauth_consumer->setClientId(Config::get('Svabael/SocialOauth::facebook.client_id'));
    // $oauth_consumer->setClientSecret(Config::get('Svabael/SocialOauth::facebook.client_secret'));
    // $oauth_consumer->setScope(Config::get('Svabael/SocialOauth::facebook.scope'));

    $oauth_consumer->setClientId($clientId);
    $oauth_consumer->setClientSecret($clientSecret);
    $oauth_consumer->setScope($scope);

    $oauth_consumer->setRedirectUri($protocol . Request::server('HTTP_HOST') . '/facebook');
    if(!Request::get("code")) {
      error_log("trying to auhorize");
      $oauth_consumer->authorize();
    } else {
      error_log("came back from auhorize");
      $oauth_consumer->setCode(Request::get("code"));
      $access_token = $oauth_consumer->requestAccessToken();
      $oauth_consumer->setAccessToken($access_token);
      $user = $oauth_consumer->getUserProfile();
      $user = json_decode($user);

      Session::put('user', $user);
      return Redirect::to('/');
    }  
  }
}
