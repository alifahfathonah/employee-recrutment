<?php

  function alertsuccess($name,$text) {
    $CI =& get_instance();
    $alert = ' 
    <div class="alert alert-success fade show" role="alert">
    '.$text.'
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    </div>
    ';
    return $CI->session->set_flashdata($name,$alert);
  }