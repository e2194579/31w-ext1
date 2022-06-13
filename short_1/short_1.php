<?php
    /**
     * Plugin name: Short_1
     * Description: Un premier exemple de plugin utilisant shortcode
     * Author: RBC
     * Author URI: https://github.com/e2194579
     * Plugin URI: https://github.com/e2194579/31w-ext1
     */

     function genere_adresse(){
        $contenu = "<style>
        .code_adr{
           margin: 10px;
           padding: 10px;
           border-left: 4px solid #005;
           background-color: #bbb
        } </style>";

        $contenu .= "<code class='code_adr'>3800 Rue Sherbrooke E, Montréal, QC H1X 2A2</code>";
        $contenu .= "<button class='btn'>OK</button>";
        $contenu .= "<script>
        (function(){
           let OK = document.querySelector('.btn')
           OK.addEventListener('mousedown', function(){
            console.log('BRAVO!')            })
        })()
        </script>";
        return $contenu;
     }
     add_shortcode('adresse', 'genere_adresse');