<?php
	/**
	 * This Class is used to store and manage Images
	 * Their Paths and their Filestreams can be stored and called with specific methods
	 * 
	 * @author Sheg Mourway
	 * @copyright
	 * This Class is property of Sheg Mourway
	 * All Rights Reserved 2016
	 */
	class Image {
		private $imageResourceIdentifier;
		private $imagePath;
		
		public function __construct($imagePath) {
			$this->imagePath = $imagePath;
			$this->imageResourceIdentifier = @imagecreatefrompng($this->imagePath);
		}
		
		/**
		 * Returns the Filestream of $image
		 * @return mixed
		 * Object of type Filestream
		 */
		public function getImageResourceIdentifier() {
			return $this->imageResourceIdentifier;
		}
		
		/**
		 * Returns the Path as String of the Image
		 * @return string
		 * Value of type String
		 */
		public function getImagePath() : string {
			return $this->imagePath;
		}
	}