<?php

   namespace Grayl\Mixin\Common\Traits;

   /**
    * Trait StaticTrait
    * Used to handle objects that maintain their own persistence
    *
    * @package Grayl\Mixin\Common
    */
   trait StaticTrait
   {

      /**
       * The previously saved instance of this class
       *
       * @var object
       */
      private static object $instance;


      /**
       * Retrieves the previously saved instance of self or creates a new one
       *
       * @return self
       */
      public static function getInstance (): object
      {

         // If there is no persistent instance, create it
         if ( empty( self::$instance ) ) {
            // Create a new instance
            self::$instance = new self();
         }

         // Return the saved instance
         return self::$instance;
      }

   }