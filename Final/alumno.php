<div style="border: 2px solid black; width: 300;">
                Examen Final SIS 256<br>
                Estudiante: Miguel Angel Odrillas Mamani <br>
                CU: 35-4391 <br>
                esta es la <span>
                <?php
                    if (isset( $_COOKIE['contador'] ) ) {
                    $valor=$_COOKIE['contador']+1;
                    echo "$valor vez";
                    setcookie("contador",$valor,0);
                    }
                    else
                    {
                     echo "1 vez";
                     setcookie("contador",1,0);
                    }
                    ?>
                </span> vez que visita la pagina
            </div>