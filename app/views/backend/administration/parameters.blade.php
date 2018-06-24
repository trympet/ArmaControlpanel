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
                        <form class="smart-form">
                            <fieldset>
                                <div class="row">
                                    <section class="col col-6">
                                        <label class="label" for="armapath">{{Lang::get('administration.armapath')}}
                                        </label>
                                        <label class="input">
                                        <input class="valid" type="text" name="armapath" placeholder="{{ Lang::get('administration.armapath') }}" value="{{ $armapath }}"></input>
                                        </label>
                                    </section>
                                    <section class="col col-6">
                                        <label class="label" for="arma64path">{{Lang::get('administration.arma64path')}}
                                        </label>
                                        <label class="input">
                                        <input class="valid" type="text" name="arma64path" placeholder="{{ Lang::get('administration.arma64path') }}"></input>
                                        </label>
                                    </section>
                                </div>
                                <div class="row">
                                    <section class="col col-6">
                                        <label class="label" for="firedaemonpath">{{Lang::get('administration.firedaemonpath')}}
                                        </label>
                                        <label class="input">
                                        <input class="valid" type="text" name="firedaemonpath"></input>
                                        </label>
                                    </section>
                                    <section class="col col-6">
                                        <label class="label" for="armapathexe">{{Lang::get('administration.armapathexe')}}
                                        </label>
                                        <label class="input">
                                        <input class="valid" type="text" name="armapathexe"></input>
                                        </label>
                                    </section>
                                </div>
                                <div class="row">
                                    <section class="col col-6">
                                        <label class="label" for="defaultplayers">{{Lang::get('administration.defaultplayers')}}
                                        </label>
                                        <label class="input">
                                        <input class="valid" type="number" name="defaultplayers" min="4" max="256"></input>
                                        </label>
                                    </section>
                                    <section class="col col-6">
                                        <label class="label" for="battleye">{{Lang::get('administration.battleye')}}
                                        </label>
                                        <label class="input">
                                        <input class="valid" type="number" name="battleye" min="0" max="1"></input>
                                        </label>
                                    </section>
                                </div>
                            </fieldset>
                        </form>
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
