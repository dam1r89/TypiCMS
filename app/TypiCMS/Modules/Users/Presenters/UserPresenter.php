<?php namespace TypiCMS\Modules\Users\Presenters;

use TypiCMS\Presenters\AbstractPresenter;
use TypiCMS\Presenters\Presentable;

class UserPresenter extends AbstractPresenter implements Presentable {

	public function getMergedPermissions()
	{
		return implode(', ', array_keys($this->object->getMergedPermissions()));
	}

	public function activated()
	{
		return $this->object->isActivated() ? trans('global.Yes') : trans('global.No') ;
	}

	public function superUser()
	{
		return $this->object->isSuperUser() ? trans('global.Yes') : trans('global.No') ;
	}

}