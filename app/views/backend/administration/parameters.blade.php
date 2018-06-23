<section id="widget-grid" class="">
    <div class="row">
        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="jarviswidget" id="wid-id-1" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="true" data-widget-custombutton="false" data-widget-collapsed="false" data-widget-sortable="false">
                <header>
                    <span class="widget-icon"> <i class="fa fa-list-ul"></i> </span>
                    <h2>{{ Lang::get('administration.parameters') }}</h2>
                    <div class="widget-toolbar" role="menu">
                        <button id="update_arma" class="btn btn-default">{{ Lang::get('administration.update') }}</button>
                    </div>
                </header>
                <div>
                    <div class="jarviswidget-editbox">
                    </div>
					<div class="widget-body no-padding">
                        <fieldset>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label class="input state-success">
                                    <input class="valid" type="text"></input>
                                    </label>
                                </div>
                                <div class="col-sm-6">
                                    <label class="input state-success">
                                    <input class="valid" type="text"></input>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label class="input state-success">
                                    <input class="valid" type="text"></input>
                                    </label>
                                </div>
                                <div class="col-sm-6">
                                    <label class="input state-success">
                                    <input class="valid" type="text"></input>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label class="input state-success">
                                    <input class="valid" type="text"></input>
                                    </label>
                                </div>
                                <div class="col-sm-6">
                                    <label class="input state-success">
                                    <input class="valid" type="text"></input>
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
        </article>
    </div>
</div>
<script type="text/javascript">
    pageSetUp();
    var pagefunction = function()
    {
		$('#update_arma').click(function() {
            
			$.ajax({
				type:   'GET',
				url:    '//cp.mvmt.no/backend/administration/update_arma',
				async:  'true',
				data:   { format: 'json' },
			}).done(function(data) {
				console.log(data);
				$('#console_output').html(data);
			});
		});
    };
    pagefunction();
</script>
