<!-- Modal -->
<!-- Modal form to add a post -->
<!-- Modal form to add a post -->
<div id="addModal" class="modal fade bd-example-modal-lg" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="padding: 10px;background-color: #ECF0F5;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">x</button>
                <h2 class="modal-title"></h2>
                Seleziona gli optional che desideri e poi clicca sul tasto "Add".
                <br/> Per completare l'ordine clicca sul tasto Booking
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <a type="text" data-toggle="tooltip" data-placement="top" title="Coffee Break">Coffee Break
                                    <i class="glyphicon glyphicon-question-sign"></i>
                                </a>
                                <input type="number" class="change-handled form-control" id="coffee_break" autofocus>
                                <p class="errorTitle text-center alert alert-danger hidden"></p>
                            </div>

                            <div class="col-md-4">
                                <a type="text" data-toggle="tooltip" data-placement="top" title="euro 8,5 a persona">Quick Lunch
                                    <i class="glyphicon glyphicon-question-sign"></i>
                                </a>
                                <input type="number" class="change-handled form-control" id="quick_lunch" autofocus>
                                <p class="errorContent text-center alert alert-danger hidden"></p>
                            </div>

                            <div class="col-md-4">
                                <a type="text" data-toggle="tooltip" data-placement="top" title="Permanent Coffee">Permanent Coffee
                                    <i class="glyphicon glyphicon-question-sign"></i>
                                </a>
                                <input type="number" class="change-handled form-control" id="permanent_coffee" autofocus>
                                <p class="errorContent text-center alert alert-danger hidden"></p>
                            </div>

                            <div class="col-md-4">
                                <a type="text" data-toggle="tooltip" data-placement="top" title="Wi-Fi">Wi-Fi
                                    <i class="glyphicon glyphicon-question-sign"></i>
                                </a>
                                <input type="number" class="change-handled form-control" id="wifi" autofocus>
                                <p class="errorContent text-center alert alert-danger hidden"></p>
                            </div>

                            <div class="col-md-4">
                                <a type="text" data-toggle="tooltip" data-placement="top" title="Lavagna Fogli Mobili">Lavagna Fogli mobili
                                    <i class="glyphicon glyphicon-question-sign"></i>
                                </a>
                                <input type="number" class="form-control" id="lavagna_foglimobili" autofocus>
                                <p class="errorContent text-center alert alert-danger hidden"></p>
                            </div>

                            <div class="col-md-4">
                                <a type="text" data-toggle="tooltip" data-placement="top" title="Stampante">Stampante
                                    <i class="glyphicon glyphicon-question-sign"></i>
                                </a>
                                <input type="number" class="form-control" id="stampante" autofocus>
                                <p class="errorContent text-center alert alert-danger hidden"></p>
                            </div>

                            <div class="col-md-4">
                                <a type="text" data-toggle="tooltip" data-placement="top" title="Permanent Coffee Plus">Permanent Coffee Plus
                                    <i class="glyphicon glyphicon-question-sign"></i>
                                </a>
                                <input type="number" class="form-control" id="permanent_coffeeplus" autofocus>
                                <p class="errorContent text-center alert alert-danger hidden"></p>
                            </div>

                            <div class="col-md-4">
                                <a type="text" data-toggle="tooltip" data-placement="top" title="Connessione via cavo">Connessione_viacavo
                                    <i class="glyphicon glyphicon-question-sign"></i>
                                </a>
                                <input type="number" class="form-control" id="connessione_viacavo" autofocus>
                                <p class="errorContent text-center alert alert-danger hidden"></p>
                            </div>

                            <div class="col-md-4">
                                <a type="text" data-toggle="tooltip" data-placement="top" title="Integrazione permanent Coffee Plus">Int. Permanent Coffee Plus
                                    <i class="glyphicon glyphicon-question-sign"></i>
                                </a>
                                <input type="number" class="form-control" id="integrazione_permanentcoffee" autofocus>
                                <p class="errorContent text-center alert alert-danger hidden"></p>
                            </div>

                            <div class="col-md-4">
                                <a type="text" data-toggle="tooltip" data-placement="top" title="Upgrade Banda 10mb">Upgrade Banda 10 Mb
                                    <i class="glyphicon glyphicon-question-sign"></i>
                                </a>
                                <input type="number" class="form-control" id="upgrade_banda10mb" autofocus>
                                <p class="errorContent text-center alert alert-danger hidden"></p>
                            </div>

                            <div class="col-md-4">
                                <a type="text" data-toggle="tooltip" data-placement="top" title="Upgrade Banda 8mb">Upgrade Banda 8 Mb
                                    <i class="glyphicon glyphicon-question-sign"></i>
                                </a>
                                <input type="number" class="form-control" id="upgrade_banda8mb" autofocus>
                                <p class="errorContent text-center alert alert-danger hidden"></p>
                            </div>

                            <div class="col-md-4">
                                <a type="text" data-toggle="tooltip" data-placement="top" title="Upgrade Banda 20mb">Upgrade Banda 20 Mb
                                    <i class="glyphicon glyphicon-question-sign"></i>
                                </a>
                                <input type="number" class="form-control" id="upgrade_banda20mb" autofocus>
                                <p class="errorContent text-center alert alert-danger hidden"></p>
                            </div>

                            <div class="col-md-4">
                                <a type="text" data-toggle="tooltip" data-placement="top" title="Wirless 4mb 20accessi">Wirless 4mb 20accessi
                                    <i class="glyphicon glyphicon-question-sign"></i>
                                </a>
                                <input type="number" class="form-control" id="wirless_4mb20accessi" autofocus>
                                <p class="errorContent text-center alert alert-danger hidden"></p>
                            </div>

                            <div class="col-md-4">
                                <a type="text" data-toggle="tooltip" data-placement="top" title="Wirless 8mb 35accessi">Wirless 8mb 35accessi
                                    <i class="glyphicon glyphicon-question-sign"></i>
                                </a>
                                <input type="number" class="form-control" id="wirless_8mb35accessi" autofocus>
                                <p class="errorContent text-center alert alert-danger hidden"></p>
                            </div>

                            <div class="col-md-4">
                                <a type="text" data-toggle="tooltip" data-placement="top" title="Wirless 10mb 50accessi">Wirless 10mb 50accessi
                                    <i class="glyphicon glyphicon-question-sign"></i>
                                </a>
                                <input type="number" class="form-control" id="wirless_10mb50accessi" autofocus>
                                <p class="errorContent text-center alert alert-danger hidden"></p>
                            </div>


                            <div class="col-md-4">
                                <a type="text" data-toggle="tooltip" data-placement="top" title="Fattorino">Fattorino
                                    <i class="glyphicon glyphicon-question-sign"></i>
                                </a>
                                <input type="number" class="form-control" id="fattorino" autofocus>
                                <p class="errorContent text-center alert alert-danger hidden"></p>
                            </div>

                            <div class="col-md-12">

                                <div class="col-sm-2">
                                    <a type="text" data-toggle="tooltip" data-placement="top" title="Lavagna Interattiva">Lavagna Interattiva
                                        <i class="glyphicon glyphicon-question-sign"></i>
                                    </a>
                                    <label class="btn btn-default blue">
                                        <input type="checkbox" class="custom-control-input" id="lavagna_interattiva">
                                        <p class="errorContent text-center alert alert-danger hidden"></p>
                                    </label>
                                </div>
                                <div class="col-sm-2">
                                    <a type="text" data-toggle="tooltip" data-placement="top" title="Videoproiettore">Videoproiettore
                                        <i class="glyphicon glyphicon-question-sign"></i>
                                    </a>
                                    <label class="btn btn-default blue">
                                        <input type="checkbox" class="custom-control-input" id="videoproiettore">
                                        <p class="errorContent text-center alert alert-danger hidden"></p>
                                    </label>
                                </div>
                                <div class="col-sm-2">
                                    <a type="text" data-toggle="tooltip" data-placement="top" title="Videoconferenza">Videoconferenza
                                        <i class="glyphicon glyphicon-question-sign"></i>
                                    </a>
                                    <label class="btn btn-default blue">
                                        <input type="checkbox" class="custom-control-input" id="videoconferenza">
                                        <p class="errorContent text-center alert alert-danger hidden"></p>
                                    </label>
                                </div>
                                <div class="col-sm-2">
                                    <a type="text" data-toggle="tooltip" data-placement="top" title="Webconference">Webconference
                                        <i class="glyphicon glyphicon-question-sign"></i>
                                    </a>
                                    <label class="btn btn-default blue">
                                        <input type="checkbox" class="custom-control-input" id="webconference" value="0">
                                        <p class="errorContent text-center alert alert-danger hidden"></p>
                                    </label>
                                </div>
                                <div class="col-sm-2">
                                    <a type="text" data-toggle="tooltip" data-placement="top" title="Videoregistrazione">Videoregistrazione
                                        <i class="glyphicon glyphicon-question-sign"></i>
                                    </a>
                                    <label class="btn btn-default blue">
                                        <input type="checkbox" class="custom-control-input" id="videoregistrazione" value="0">
                                        <p class="errorContent text-center alert alert-danger hidden"></p>
                                    </label>
                                </div>

                            </div>


                            <div class="col-sm-8 center-block" style="margin-top: 40px; margin-bottom: 20px">
                                <button type="button" class="add btn btn-success btn-lg">
                                    <span class='glyphicon glyphicon-plus'></span> Add
                                </button>
                            </div>


                            <div class="col-md-12">
                                <h4>
                                    <b>Price Resource:  &euro; <a class="price_resource"></a></b>
                                </h4>
                                <h4>
                                    <b>Total Optional: &euro; <a class="totaloptional"></a></b>
                                </h4><br />
                                ----------------------------------------
                                <h4>
                                    <b>TOT: &euro; <a class="total"></a></b>
                                </h4>
                            </div>
                        </div>
                    </div>

                </form>
                <div class="modal-footer">
                    <button type="button" class="save btn btn-primary">
                        <span class='glyphicon glyphicon-check'></span> Booking
                    </button>
                    <button type="button" class="btn btn-warning" data-dismiss="modal">
                        <span class='glyphicon glyphicon-remove'></span> Close
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>