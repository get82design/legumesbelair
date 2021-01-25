@extends('layouts.myapp')

@section('dynamicPageTitle', 'Recadrage photo')
@section('description', "")
@section('keywords', "")

@section('content')

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/cropper.css">
  <link rel="stylesheet" href="assets/css/main2.css">

    @include('components.header.titlepage')

    <!-- Content -->
    <div class="container m-tb-20">
        <div class="row">
            <div class="col-md-9">
                <!-- <h3>Demo:</h3> -->
                <div class="img-container">
                    <img src="assets/images/bg-accueil-02.jpg" alt="Picture">
                </div>
            </div>
            <div class="col-md-3">
                <h3>Preview:</h3>
                <div class="docs-preview clearfix">
                    <div class="img-preview preview-lg"></div>
                </div>
            </div>
        </div>
        <div class="row" id="actions">
            <div class="col-md-9 docs-buttons">
                <!-- <h3>Toolbar:</h3> -->
                <div class="btn-group">
                    <button type="button" class="btn btn-primary" data-method="setDragMode" data-option="move" title="Move">
                        <span class="docs-tooltip" data-toggle="tooltip" title="Déplacer">
                        <span class="fa fa-arrows"></span>
                        </span>
                    </button>
                    <button type="button" class="btn btn-primary" data-method="setDragMode" data-option="crop" title="Crop">
                        <span class="docs-tooltip" data-toggle="tooltip" title="Recadrer">
                        <span class="fa fa-crop"></span>
                        </span>
                    </button>
                </div>

                <div class="btn-group">
                    <button type="button" class="btn btn-primary" data-method="zoom" data-option="0.1" title="Zoom In">
                        <span class="docs-tooltip" data-toggle="tooltip" title="zoom avant">
                        <span class="fa fa-search-plus"></span>
                        </span>
                    </button>
                    <button type="button" class="btn btn-primary" data-method="zoom" data-option="-0.1" title="Zoom Out">
                        <span class="docs-tooltip" data-toggle="tooltip" title="zoom arrière">
                        <span class="fa fa-search-minus"></span>
                        </span>
                    </button>
                </div>

                <div class="btn-group">
                    <button type="button" class="btn btn-primary" data-method="move" data-option="-10" data-second-option="0" title="Move Left">
                        <span class="docs-tooltip" data-toggle="tooltip" title="déplacer à gauche">
                        <span class="fa fa-arrow-left"></span>
                        </span>
                    </button>
                    <button type="button" class="btn btn-primary" data-method="move" data-option="10" data-second-option="0" title="Move Right">
                        <span class="docs-tooltip" data-toggle="tooltip" title="déplacer à droite">
                        <span class="fa fa-arrow-right"></span>
                        </span>
                    </button>
                    <button type="button" class="btn btn-primary" data-method="move" data-option="0" data-second-option="-10" title="Move Up">
                        <span class="docs-tooltip" data-toggle="tooltip" title="déplacer vers le haut">
                        <span class="fa fa-arrow-up"></span>
                        </span>
                    </button>
                    <button type="button" class="btn btn-primary" data-method="move" data-option="0" data-second-option="10" title="Move Down">
                        <span class="docs-tooltip" data-toggle="tooltip" title="déplacer vers le bas">
                        <span class="fa fa-arrow-down"></span>
                        </span>
                    </button>
                </div>

                <div class="btn-group">
                    <button type="button" class="btn btn-primary" data-method="rotate" data-option="-45" title="Rotate Left">
                        <span class="docs-tooltip" data-toggle="tooltip" title="Rotation gauche">
                        <span class="fa fa-rotate-left"></span>
                        </span>
                    </button>
                    <button type="button" class="btn btn-primary" data-method="rotate" data-option="45" title="Rotate Right">
                        <span class="docs-tooltip" data-toggle="tooltip" title="rotation droite">
                        <span class="fa fa-rotate-right"></span>
                        </span>
                    </button>
                </div>

                <div class="btn-group">
                    <button type="button" class="btn btn-primary" data-method="scaleX" data-option="-1" title="Flip Horizontal">
                        <span class="docs-tooltip" data-toggle="tooltip" title="miroir horizontal">
                        <span class="fa fa-arrows-h"></span>
                        </span>
                    </button>
                    <button type="button" class="btn btn-primary" data-method="scaleY" data-option="-1" title="Flip Vertical">
                        <span class="docs-tooltip" data-toggle="tooltip" title="miroir vertical">
                        <span class="fa fa-arrows-v"></span>
                        </span>
                    </button>
                </div>

                <div class="btn-group">
                    <button type="button" class="btn btn-primary" data-method="reset" title="Reset">
                        <span class="docs-tooltip" data-toggle="tooltip" title="Remise à zéro">
                        <span class="fa fa-refresh"></span>
                        </span>
                    </button>
                    <label class="btn btn-primary btn-upload" for="inputImage" title="Upload image file">
                        <input type="file" class="sr-only" id="inputImage" name="file" accept="image/*">
                        <span class="docs-tooltip" data-toggle="tooltip" title="Importer image">
                        <span class="fa fa-upload"></span>
                        </span>
                    </label>
                    <button type="button" class="btn btn-primary" data-method="destroy" title="Destroy">
                        <span class="docs-tooltip" data-toggle="tooltip" title="effacer">
                        <span class="fa fa-power-off"></span>
                        </span>
                    </button>
                </div>

                <div class="btn-group btn-group-crop">
                    <button type="button" class="btn btn-success" data-method="getCroppedCanvas" data-option="{ &quot;maxWidth&quot;: 4096, &quot;maxHeight&quot;: 4096 }">
                        <span class="docs-tooltip" data-toggle="tooltip" title="recadrer l'image">
                        Recadrage
                        </span>
                    </button>
                </div>

                <!-- Show the cropped image in modal -->
                <div class="modal fade docs-cropped" id="getCroppedCanvasModal" role="dialog" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="getCroppedCanvasTitle">Créer une image</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body"></div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                                <a class="btn btn-primary" id="download" href="javascript:void(0);" download="cropped.jpg">Télécharger</a>
                            </div>
                        </div>
                    </div>
                </div><!-- /.modal -->

            </div><!-- /.docs-buttons -->

            <div class="col-md-3 docs-toggles" style="display:none;">
                <!-- <h3>Toggles:</h3> -->
                <div class="btn-group d-flex flex-nowrap" data-toggle="buttons">
                    <label class="btn btn-primary active">
                        <input type="radio" class="sr-only" id="aspectRatio1" name="aspectRatio" value="1.7777777777777777">
                        <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 16 / 9">
                        16:9
                        </span>
                    </label>
                    <label class="btn btn-primary">
                        <input type="radio" class="sr-only" id="aspectRatio2" name="aspectRatio" value="1.3333333333333333">
                        <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 4 / 3">
                        4:3
                        </span>
                    </label>
                    <label class="btn btn-primary">
                        <input type="radio" class="sr-only" id="aspectRatio3" name="aspectRatio" value="1">
                        <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 1 / 1">
                        1:1
                        </span>
                    </label>
                    <label class="btn btn-primary">
                        <input type="radio" class="sr-only" id="aspectRatio4" name="aspectRatio" value="0.6666666666666666">
                        <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 2 / 3">
                        2:3
                        </span>
                    </label>
                    <label class="btn btn-primary">
                        <input type="radio" class="sr-only" id="aspectRatio5" name="aspectRatio" value="NaN">
                        <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: NaN">
                        Free
                        </span>
                    </label>
                </div>

                <div class="btn-group d-flex flex-nowrap" data-toggle="buttons">
                    <label class="btn btn-primary active">
                        <input type="radio" class="sr-only" id="viewMode0" name="viewMode" value="0" checked>
                        <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 0">
                        VM0
                        </span>
                    </label>
                    <label class="btn btn-primary">
                        <input type="radio" class="sr-only" id="viewMode1" name="viewMode" value="1">
                        <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 1">
                        VM1
                        </span>
                    </label>
                    <label class="btn btn-primary">
                        <input type="radio" class="sr-only" id="viewMode2" name="viewMode" value="2">
                        <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 2">
                        VM2
                        </span>
                    </label>
                    <label class="btn btn-primary">
                        <input type="radio" class="sr-only" id="viewMode3" name="viewMode" value="3">
                        <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 3">
                        VM3
                        </span>
                    </label>
                </div>

                <div class="dropdown dropup docs-options">
                    <button type="button" class="btn btn-primary btn-block dropdown-toggle" id="toggleOptions" data-toggle="dropdown" aria-expanded="true">
                        Toggle Options
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="toggleOptions">
                        <li class="dropdown-item">
                        <div class="form-check">
                            <input class="form-check-input" id="responsive" type="checkbox" name="responsive" checked>
                            <label class="form-check-label" for="responsive">responsive</label>
                        </div>
                        </li>
                        <li class="dropdown-item">
                        <div class="form-check">
                            <input class="form-check-input" id="restore" type="checkbox" name="restore" checked>
                            <label class="form-check-label" for="restore">restore</label>
                        </div>
                        </li>
                        <li class="dropdown-item">
                        <div class="form-check">
                            <input class="form-check-input" id="checkCrossOrigin" type="checkbox" name="checkCrossOrigin" checked>
                            <label class="form-check-label" for="checkCrossOrigin">checkCrossOrigin</label>
                        </div>
                        </li>
                        <li class="dropdown-item">
                        <div class="form-check">
                            <input class="form-check-input" id="checkOrientation" type="checkbox" name="checkOrientation" checked>
                            <label class="form-check-label" for="checkOrientation">checkOrientation</label>
                        </div>
                        </li>
                        <li class="dropdown-item">
                        <div class="form-check">
                            <input class="form-check-input" id="modal" type="checkbox" name="modal" checked>
                            <label class="form-check-label" for="modal">modal</label>
                        </div>
                        </li>
                        <li class="dropdown-item">
                        <div class="form-check">
                            <input class="form-check-input" id="guides" type="checkbox" name="guides" checked>
                            <label class="form-check-label" for="guides">guides</label>
                        </div>
                        </li>
                        <li class="dropdown-item">
                        <div class="form-check">
                            <input class="form-check-input" id="center" type="checkbox" name="center" checked>
                            <label class="form-check-label" for="center">center</label>
                        </div>
                        </li>
                        <li class="dropdown-item">
                        <div class="form-check">
                            <input class="form-check-input" id="highlight" type="checkbox" name="highlight" checked>
                            <label class="form-check-label" for="highlight">highlight</label>
                        </div>
                        </li>
                        <li class="dropdown-item">
                        <div class="form-check">
                            <input class="form-check-input" id="background" type="checkbox" name="background" checked>
                            <label class="form-check-label" for="background">background</label>
                        </div>
                        </li>
                        <li class="dropdown-item">
                        <div class="form-check">
                            <input class="form-check-input" id="autoCrop" type="checkbox" name="autoCrop" checked>
                            <label class="form-check-label" for="autoCrop">autoCrop</label>
                        </div>
                        </li>
                        <li class="dropdown-item">
                        <div class="form-check">
                            <input class="form-check-input" id="movable" type="checkbox" name="movable" checked>
                            <label class="form-check-label" for="movable">movable</label>
                        </div>
                        </li>
                        <li class="dropdown-item">
                        <div class="form-check">
                            <input class="form-check-input" id="rotatable" type="checkbox" name="rotatable" checked>
                            <label class="form-check-label" for="rotatable">rotatable</label>
                        </div>
                        </li>
                        <li class="dropdown-item">
                        <div class="form-check">
                            <input class="form-check-input" id="scalable" type="checkbox" name="scalable" checked>
                            <label class="form-check-label" for="scalable">scalable</label>
                        </div>
                        </li>
                        <li class="dropdown-item">
                        <div class="form-check">
                            <input class="form-check-input" id="zoomable" type="checkbox" name="zoomable" checked>
                            <label class="form-check-label" for="zoomable">zoomable</label>
                        </div>
                        </li>
                        <li class="dropdown-item">
                        <div class="form-check">
                            <input class="form-check-input" id="zoomOnTouch" type="checkbox" name="zoomOnTouch" checked>
                            <label class="form-check-label" for="zoomOnTouch">zoomOnTouch</label>
                        </div>
                        </li>
                        <li class="dropdown-item">
                        <div class="form-check">
                            <input class="form-check-input" id="zoomOnWheel" type="checkbox" name="zoomOnWheel" checked>
                            <label class="form-check-label" for="zoomOnWheel">zoomOnWheel</label>
                        </div>
                        </li>
                        <li class="dropdown-item">
                        <div class="form-check">
                            <input class="form-check-input" id="cropBoxMovable" type="checkbox" name="cropBoxMovable" checked>
                            <label class="form-check-label" for="cropBoxMovable">cropBoxMovable</label>
                        </div>
                        </li>
                        <li class="dropdown-item">
                        <div class="form-check">
                            <input class="form-check-input" id="cropBoxResizable" type="checkbox" name="cropBoxResizable" checked>
                            <label class="form-check-label" for="cropBoxResizable">cropBoxResizable</label>
                        </div>
                        </li>
                        <li class="dropdown-item">
                        <div class="form-check">
                            <input class="form-check-input" id="toggleDragModeOnDblclick" type="checkbox" name="toggleDragModeOnDblclick" checked>
                            <label class="form-check-label" for="toggleDragModeOnDblclick">toggleDragModeOnDblclick</label>
                        </div>
                        </li>
                    </ul>
                </div><!-- /.dropdown -->

                <a class="btn btn-success btn-block" data-toggle="tooltip" href="https://fengyuanchen.github.io/photo-editor" title="An advanced example of Cropper.js">Photo Editor</a>

            </div><!-- /.docs-toggles -->
        </div>
    </div>

    <div style="display:flex; justify-content:center;" class="m-tb-20">
        <button class="flex-c-m txt-s-105 cl0 bg10 size-a-42 hov-btn2 trans-04 p-rl-10 m-tb-8" onClick='javascript:history.back();'>
            Retour
        </button>
    </div>

@endsection

@section('script')
<script src="assets/js/main2.js"></script>
<script src="assets/js/cropper.js"></script>
@endsection