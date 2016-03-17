<script>
    //TODO: cambiar esto a auna llamada por ajax, es mas menos feo
    var contents = <?=json_encode(['reclamos' => $reclamos->toArray()]);?>;
</script>
<div class="row" ng-controller="ReclamosModuleController" ng-init="init()">
</div>