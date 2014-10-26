<?php

class page_xAi_page_owner_update extends page_componentBase_page_update {
		
	public $git_path="https://github.com/xepan/xAi.git"; // Put your components git path here

	function init(){
		parent::init();

		// 
		// Code To run before update
		
		$this->update($dynamic_model_update=false); // All modls will be dynamic executed in here
		
		// Code to run after update

		$model=$this->add('xAi/Model_Config');
		$model->add('dynamic_model/Controller_AutoCreator');
		$model->tryLoadAny();

		$model=$this->add('xAi/Model_Dimension');
		$model->add('dynamic_model/Controller_AutoCreator');
		$model->tryLoadAny();

		$model=$this->add('xAi/Model_IBlockContent');
		$model->add('dynamic_model/Controller_AutoCreator');
		$model->tryLoadAny();

		$model=$this->add('xAi/Model_Session');
		$model->add('dynamic_model/Controller_AutoCreator');
		$model->tryLoadAny();

		$model=$this->add('xAi/Model_MetaData');
		$model->add('dynamic_model/Controller_AutoCreator');
		$model->tryLoadAny();

		$model=$this->add('xAi/Model_Data');
		$model->add('dynamic_model/Controller_AutoCreator');
		$model->tryLoadAny();

		$model=$this->add('xAi/Model_Information');
		$model->add('dynamic_model/Controller_AutoCreator');
		$model->tryLoadAny();
		
		$model=$this->add('xAi/Model_InformationExtractor');
		$model->add('dynamic_model/Controller_AutoCreator');
		$model->tryLoadAny();		

		$model=$this->add('xAi/Model_SalesExecutive');
		$model->add('dynamic_model/Controller_AutoCreator');
		$model->tryLoadAny();		

	}
}