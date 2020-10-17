<?php

   namespace Grayl\Mixin\Common\Entity;

   /**
    * Class FlatDataBag
    * Creates a standalone bag of data that can be used to store pieces in an unordered set
    * Used in controllers, models, etc. to simplify the process of storing and retrieving simple sets of data
    *
    * @package Grayl\Mixin\Common
    */
   class FlatDataBag
   {

      /**
       * An array of data pieces
       *
       * @var array
       */
      private array $pieces = [];


      /**
       * Sets a single piece of data if it not already in the set
       *
       * @param mixed $piece The piece of data to add
       */
      public function putPiece ( $piece ): void
      {

         // Make sure this piece doesn't already exist in the set
         if ( ! $this->findPiece( $piece ) ) {
            // Add the piece
            $this->pieces[] = $piece;
         }
      }


      /**
       * Returns the entire array of data pieces
       *
       * @return array
       */
      public function getPieces (): array
      {

         // Return the entire array
         return $this->pieces;
      }


      /**
       * Sets an array of data pieces
       *
       * @param array $pieces An array of data pieces to set
       */
      public function putPieces ( array $pieces ): void
      {

         // Loop through each piece and set it
         foreach ( $pieces as $piece ) {
            // Set the piece
            $this->putPiece( $piece );
         }
      }


      /**
       * Searches the current pieces of data to see if a specific piece is already present
       *
       * @param mixed $piece The piece of data to search for
       *
       * @return bool
       */
      private function findPiece ( $piece ): bool
      {

         // Look through all pieces
         if ( in_array( $piece,
                        $this->getPieces(),
                        true ) ) {
            // Found
            return true;
         }

         // Not found
         return false;
      }

   }