<?php

   namespace Grayl\Mixin\Common\Traits;

   use Grayl\Mixin\Common\Entity\KeyedDataBag;

   /**
    * Trait InjectorTrait
    * The trait for package injectors that save class instances for reuse
    *
    * @package Grayl\Mixin\Common
    */
   trait InjectorTrait
   {

      /**
       * The KeyedDataBag instance to save instances to
       *
       * @var KeyedDataBag
       */
      protected KeyedDataBag $saved_instances;


      /**
       * The class constructor
       */
      public function __construct ()
      {

         // Create the KeyedDataBag
         $this->saved_instances = new KeyedDataBag();
      }


      /**
       * Retrieves a saved instance
       *
       * @param string $id The unique ID of the instance
       *
       * @return object
       */
      protected function getSavedInstance ( string $id ): ?object
      {

         // Return the saved instance
         return $this->saved_instances->getVariable( $id );
      }


      /**
       * Save an instance
       *
       * @param string $id       The unique ID of the instance
       * @param object $instance The instance to save
       */
      protected function saveInstance ( string $id,
                                        object $instance ): void
      {

         // Save the instance
         $this->saved_instances->setVariable( $id,
                                              $instance );
      }

   }