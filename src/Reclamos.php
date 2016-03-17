<?php
namespace Asimov\Solaria\Modules\Reclamos;

use Solaria\Modules\SolariaModule;

class Reclamos implements SolariaModule {

    protected $name = 'Reclamos';

    protected $menu_name = 'Reclamos';

    public function getName() {
        return $this->name;
    }

    public function getMenuName() {
        return $this->menu_name;
    }

    public function getBackendMenuUrl() {
        return url('backend/modules/reclamos');
    }

    public function getBackendStyles() {
        return [asset('modules/reclamos/css/reclamos-module.css')];
    }

    public function getFrontendStyles() {
        // TODO: Implement getFrontendStyles() method.
    }

    public function getBackendScripts() {
        return [asset('modules/reclamos/js/reclamos-module.js')];
    }

    public function getFrontendScripts() {
        // TODO: Implement getFrontendScripts() method.
    }

    public function getCustomFields() {
        // TODO: Implement getCustomFields() method.
    }

    public function render(){
        return 'reclamos';
    }
}