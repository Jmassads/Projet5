<?php

  /**
   *
   */
  class Upload extends Controller
  {


      public function __construct()
      {
        
      }

      public function index()
      {
          $this->view('admin/upload');
      }
  }
