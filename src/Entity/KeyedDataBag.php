<?php

   namespace Grayl\Mixin\Common\Entity;

   /**
    * Class KeyedDataBag
    * Creates a standalone bag of data that can be used to store variables in key = value format
    * Used in controllers, models, etc. to simplify the process of storing and retrieving indexed data
    *
    * @package Grayl\Mixin\Common
    */
   class KeyedDataBag
   {

      /**
       * An array of variables
       *
       * @var array
       */
      private array $variables = [];


      /**
       * Retrieves the value of a stored variable
       *
       * @param string $key The key name for the variable
       *
       * @return mixed
       */
      public function getVariable ( string $key )
      {

         // If the variable is set, return the value
         if ( isset( $this->variables[ $key ] ) ) {
            // Return the value we found
            return $this->variables[ $key ];
         }

         // Otherwise return null
         return null;
      }


      /**
       * Sets a single variable
       *
       * @param string $key   The key of the variable
       * @param mixed  $value The value of the variable
       */
      public function setVariable ( string $key,
                                    $value ): void
      {

         // Set the variable
         $this->variables[ $key ] = $value;
      }


      /**
       * Retrieves the entire array of variables
       *
       * @return array
       */
      public function getVariables (): array
      {

         // Return the entire array
         return $this->variables;
      }


      /**
       * Sets multiple variables using an array
       *
       * @param array $variables The associative array of variables to set ( key => value )
       */
      public function setVariables ( array $variables ): void
      {

         // Loop through each element and assign it
         foreach ( $variables as $key => $value ) {
            // Set the variable
            $this->setVariable( $key,
                                $value );
         }
      }


      /**
       * Unsets a single variable
       *
       * @param string $key The key of the variable
       */
      public function unsetVariable ( string $key ): void
      {

         // Unset the variable
         unset( $this->variables[ $key ] );
      }

   }