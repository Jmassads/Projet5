<?php

  /**
   *
   */
  class Upload extends Controller
  {


      public function __construct()
      {
        
      }

      // Pour l'upload d'images dans tinyMCE
      public function index()
      {
          $this->view('admin/upload');
      }
  }
