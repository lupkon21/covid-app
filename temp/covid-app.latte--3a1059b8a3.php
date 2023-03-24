<?php

use Latte\Runtime as LR;

/** source: templates/covid-app.latte */
final class Template3a1059b8a3 extends Latte\Runtime\Template
{

	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid-19 aktuálně</title>
    <link rel="icon" href="templates/assets/virus.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="templates/style/style.css">    
</head>
<body>
    <header>
        <h1 class="display-1">Covid-19 aktuálně</h1>
';
		if (isset($datum)) /* line 15 */ {
			echo '        <h1 class="display-6" id="date">Dnes: ';
			echo LR\Filters::escapeHtmlText(($this->filters->date)($datum, 'j. n. Y')) /* line 15 */;
			echo '</h1>
';
		}
		echo '        <nav class="data-nav">
            <button class="btn btn-active" id="btn-celkem">Celkem</button>
            <button class="btn btn-inactive" id="btn-vcera">Včera</button>
        </nav>
    </header>

';
		if ($status_code == 200) /* line 22 */ {
			echo '    <div class="dashboard">
';
			if (isset($provedene_testy_celkem)) /* line 23 */ {
				echo '        <div class="card data-celkem">
            <div class="card-body">
                <h1 class="title">';
				echo LR\Filters::escapeHtmlText(($this->filters->number)($provedene_testy_celkem, 0, ',', ' ')) /* line 25 */;
				echo '</h1>
                <p class="card-text">Provedné testy celkem</p> 
            </div>
        </div>
';
			}
			echo "\n";
			if (isset($potvrzene_pripady_celkem)) /* line 30 */ {
				echo '        <div class="card data-celkem">
            <div class="card-body">
                <h1 class="title">';
				echo LR\Filters::escapeHtmlText(($this->filters->number)($potvrzene_pripady_celkem, 0, ',', ' ')) /* line 32 */;
				echo '</h1>
                <p class="card-text">Potvrzené případy celkem</p> 
            </div>
        </div>
';
			}
			echo "\n";
			if (isset($aktivni_pripady)) /* line 37 */ {
				echo '        <div class="card data-celkem">
            <div class="card-body" >
                <h1 class="title">';
				echo LR\Filters::escapeHtmlText(($this->filters->number)($aktivni_pripady, 0, ',', ' ')) /* line 39 */;
				echo '</h1>
                <p class="card-text">Aktivní případy</p> 
            </div>
        </div>
';
			}
			echo "\n";
			if (isset($vyleceni)) /* line 44 */ {
				echo '        <div class="card data-celkem">
            <div class="card-body">
                <h1 class="title">';
				echo LR\Filters::escapeHtmlText(($this->filters->number)($vyleceni, 0, ',', ' ')) /* line 46 */;
				echo '</h1>
                <p class="card-text">Vyléčení celkem</p> 
            </div>
        </div>
';
			}
			echo "\n";
			if (isset($umrti)) /* line 51 */ {
				echo '        <div class="card data-celkem">
            <div class="card-body">
                <h1 class="title">';
				echo LR\Filters::escapeHtmlText(($this->filters->number)($umrti, 0, ',', ' ')) /* line 53 */;
				echo '</h1>
                <p class="card-text">Úmrtí celkem</p> 
            </div>
        </div>
';
			}
			echo "\n";
			if (isset($aktualne_hospitalizovani)) /* line 58 */ {
				echo '        <div class="card data-celkem">
            <div class="card-body">
                <h1 class="title">';
				echo LR\Filters::escapeHtmlText(($this->filters->number)($aktualne_hospitalizovani, 0, ',', ' ')) /* line 60 */;
				echo '</h1>
                <p class="card-text">Aktuálně hospitalizovaní</p> 
            </div>
        </div>
';
			}
			echo "\n";
			if (isset($provedene_testy_vcerejsi_den)) /* line 65 */ {
				echo '        <div class="card data-vcera">
            <div class="card-body">
                <h1 class="title">';
				echo LR\Filters::escapeHtmlText(($this->filters->number)($provedene_testy_vcerejsi_den, 0, ',', ' ')) /* line 67 */;
				echo '</h1>
                <p class="card-text">Provedené testy včerejší den</p>

';
				if (strtotime($datum) != strtotime($provedene_testy_vcerejsi_den_datum . ' +1 day')) /* line 70 */ {
					if (isset($provedene_testy_vcerejsi_den_datum)) /* line 71 */ {
						echo '                    <p class="card-text date-updated"><small>Aktuální k 
                    ';
						echo LR\Filters::escapeHtmlText(($this->filters->date)($provedene_testy_vcerejsi_den_datum, 'j. n. Y')) /* line 72 */;
						echo '</small></p>
';
					}
				}
				echo '            </div>
        </div>
';
			}
			echo "\n";
			if (isset($potvrzene_pripady_vcerejsi_den)) /* line 77 */ {
				echo '        <div class="card data-vcera">
            <div class="card-body">
                <h1 class="title">';
				echo LR\Filters::escapeHtmlText(($this->filters->number)($potvrzene_pripady_vcerejsi_den, 0, ',', ' ')) /* line 79 */;
				echo '</h1>
                <p class="card-text">Potvrzené případy včerejší den</p>

';
				if (strtotime($datum) != strtotime($potvrzene_pripady_vcerejsi_den_datum . ' +1 day')) /* line 82 */ {
					if (isset($potvrzene_pripady_vcerejsi_den_datum)) /* line 83 */ {
						echo '                    <p class="card-text date-updated"><small>Aktuální k 
                    ';
						echo LR\Filters::escapeHtmlText(($this->filters->date)($potvrzene_pripady_vcerejsi_den_datum, 'j. n. Y')) /* line 84 */;
						echo '</small></p>
';
					}
				}
				echo '            </div>
        </div>
';
			}
			echo "\n";
			if (isset($provedene_antigenni_testy_celkem)) /* line 89 */ {
				echo '        <div class="card data-celkem">
            <div class="card-body">
                <h1 class="title">';
				echo LR\Filters::escapeHtmlText(($this->filters->number)($provedene_antigenni_testy_celkem, 0, ',', ' ')) /* line 91 */;
				echo '</h1>
                <p class="card-text">Provedené antigenní testy celkem</p> 
            </div>
        </div>
';
			}
			echo "\n";
			if (isset($provedene_antigenni_testy_vcerejsi_den)) /* line 96 */ {
				echo '        <div class="card data-vcera">
            <div class="card-body">
                <h1 class="title">';
				echo LR\Filters::escapeHtmlText(($this->filters->number)($provedene_antigenni_testy_vcerejsi_den, 0, ',', ' ')) /* line 98 */;
				echo '</h1>
                <p class="card-text">Provedené antigenní testy včerejší den</p>

';
				if (strtotime($datum) != strtotime($provedene_antigenni_testy_vcerejsi_den_datum . ' +1 day')) /* line 101 */ {
					if (isset($provedene_antigenni_testy_vcerejsi_den_datum)) /* line 102 */ {
						echo '                    <p class="card-text date-updated"><small>Aktuální k 
                    ';
						echo LR\Filters::escapeHtmlText(($this->filters->date)($provedene_antigenni_testy_vcerejsi_den_datum, 'j. n. Y')) /* line 103 */;
						echo '</small></p>
';
					}
				}
				echo '            </div>
        </div>
';
			}
			echo "\n";
			if (isset($vykazana_ockovani_celkem)) /* line 108 */ {
				echo '        <div class="card data-celkem">
            <div class="card-body">
                <h1 class="title">';
				echo LR\Filters::escapeHtmlText(($this->filters->number)($vykazana_ockovani_celkem, 0, ',', ' ')) /* line 110 */;
				echo '</h1>
                <p class="card-text">Vykázaná očkování celkem</p> 
            </div>
        </div>
';
			}
			echo "\n";
			if (isset($vykazana_ockovani_vcerejsi_den)) /* line 115 */ {
				echo '        <div class="card data-vcera">
            <div class="card-body">
                <h1 class="title">';
				echo LR\Filters::escapeHtmlText(($this->filters->number)($vykazana_ockovani_vcerejsi_den, 0, ',', ' ')) /* line 117 */;
				echo '</h1>
                <p class="card-text">Vykázaná očkování včerejší den</p> 

                
';
				if (strtotime($datum) != strtotime($vykazana_ockovani_vcerejsi_den_datum . ' +1 day')) /* line 121 */ {
					if (isset($vykazana_ockovani_vcerejsi_den_datum)) /* line 122 */ {
						echo '                    <p class="card-text date-updated"><small>Aktuální k 
                    ';
						echo LR\Filters::escapeHtmlText(($this->filters->date)($vykazana_ockovani_vcerejsi_den_datum, 'j. n. Y')) /* line 123 */;
						echo '</small></p>
';
					}
				}
				echo '            </div>
        </div>
';
			}
			echo "\n";
			if (isset($potvrzene_pripady_65_celkem)) /* line 128 */ {
				echo '        <div class="card data-celkem">
            <div class="card-body">
                <h1 class="title">';
				echo LR\Filters::escapeHtmlText(($this->filters->number)($potvrzene_pripady_65_celkem, 0, ',', ' ')) /* line 130 */;
				echo '</h1>
                <p class="card-text">Potvrzené případy 65+ celkem</p> 
            </div>
        </div>
';
			}
			echo "\n";
			if (isset($potvrzene_pripady_65_vcerejsi_den)) /* line 135 */ {
				echo '        <div class="card data-vcera">
            <div class="card-body">
                <h1 class="title">';
				echo LR\Filters::escapeHtmlText(($this->filters->number)($potvrzene_pripady_65_vcerejsi_den, 0, ',', ' ')) /* line 137 */;
				echo '</h1>
                <p class="card-text">Potvrzené případy 65+ včerejší den</p>

';
				if (strtotime($datum) != strtotime($potvrzene_pripady_65_vcerejsi_den_datum . ' +1 day')) /* line 140 */ {
					if (isset($potvrzene_pripady_65_vcerejsi_den_datum)) /* line 141 */ {
						echo '                    <p class="card-text date-updated"><small>Aktuální k 
                    ';
						echo LR\Filters::escapeHtmlText(($this->filters->date)($potvrzene_pripady_65_vcerejsi_den_datum, 'j. n. Y')) /* line 142 */;
						echo '</small></p>
';
					}
				}
				echo '            </div>
        </div>
';
			}
			echo "\n";
			if (isset($ockovane_osoby_celkem)) /* line 147 */ {
				echo '        <div class="card data-celkem">
            <div class="card-body">
                <h1 class="title">';
				echo LR\Filters::escapeHtmlText(($this->filters->number)($ockovane_osoby_celkem, 0, ',', ' ')) /* line 149 */;
				echo '</h1>
                <p class="card-text">Očkované osoby celkem</p> 
            </div>
        </div>
';
			}
			echo "\n";
			if (isset($ockovane_osoby_vcerejsi_den)) /* line 154 */ {
				echo '        <div class="card data-vcera">
            <div class="card-body">
                <h1 class="title">';
				echo LR\Filters::escapeHtmlText(($this->filters->number)($ockovane_osoby_vcerejsi_den, 0, ',', ' ')) /* line 156 */;
				echo '</h1>
                <p class="card-text">Očkované osoby včerejší den</p>

';
				if (strtotime($datum) != strtotime($ockovane_osoby_vcerejsi_den_datum . ' +1 day')) /* line 159 */ {
					if (isset($ockovane_osoby_vcerejsi_den_datum)) /* line 160 */ {
						echo '                    <p class="card-text date-updated"><small>Aktuální k 
                    ';
						echo LR\Filters::escapeHtmlText(($this->filters->date)($ockovane_osoby_vcerejsi_den_datum, 'j. n. Y')) /* line 161 */;
						echo '</small></p>
';
					}
				}
				echo '            </div>
        </div>
';
			}
			echo '    </div>
';
		}
		echo "\n";
		if ($status_code == 404) /* line 167 */ {
			echo '    <div class="alert alert-danger">
        <span><strong>Chyba! </strong>Omlouváme se, ale data nebyla nalezena. Server má pravděpodobně dočasný výpadek. Zkuste to prosím znovu později.</span>
    </div>
';
		}
		echo '        
    <footer class="footer">
        <p class="footer-text">&copy; ';
		echo LR\Filters::escapeHtmlText(date('Y')) /* line 172 */;
		echo ' Lukáš Protiva, Martin Šoupa</p>
    </footer>

    <script src="templates/script/script.js"></script>
</body>
</html>';
	}
}
