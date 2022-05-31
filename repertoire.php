<?php
session_start();
if(!$_SESSION['mdp']){
    header('Location: connexion.php ');
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link href="https://fonts.googleapis.com/css2?family=Arapey&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="repertoire.css">
    <script src="https://kit.fontawesome.com/c6c4aaaf12.js" crossorigin="anonymous"></script>
    <title>Répertoire</title>

</html>

<body>
<header>
        <?php include('header.php'); ?>
        </header>


    <section>
        <table>

            <thead>
                <tr>
                    <th>Matricule</th>
                    <th>Grade</th>
                    <th>NOM/Prénom</th>
                    <th>Numéro</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>113</td>
                    <td class="E_M">Sheriff</td>
                    <td>BLAKE Liam</td>
                    <td>8748646</td>
                </tr>

                <tr>
                    <td>130</td>
                    <td class="E_M">UnderSheriff</td>
                    <td>NELSON Scott</td>
                    <td>989443</td>
                </tr>

                <tr>
                    <td>187</td>
                    <td class="E_M">Assistant Sheriff</td>
                    <td>FOLLEY Arthur</td>
                    <td>1161003</td>
                </tr>

                <tr>
                    <td>112</td>
                    <td class="commandement">Lieutenant</td>
                    <td>MUSTAFI Kuhtrim</td>
                    <td>7746188</td>
                </tr>

                <tr>
                    <td>124</td>
                    <td class="encadrement">Master Sergent</td>
                    <td>SANCAR Kaya </td>
                    <td>8548602</td>
                </tr>

                <tr>
                    <td>106</td>
                    <td class="encadrement">Sergent</td>
                    <td>BAKARSON Edouard</td>
                    <td>9985623</td>
                </tr>

                <tr>
                    <td>110</td>
                    <td class="application">Senior Députy </td>
                    <td>MITCHELL George</td>
                    <td>1912879</td>
                </tr>

                <tr>
                    <td>126</td>
                    <td class="application">Senior Députy </td>
                    <td>CHAPMAN Paul</td>
                    <td>3080805</td>
                </tr>

                <tr>
                    <td>199</td>
                    <td class="application">Senior Députy</td>
                    <td>SION Eva</td>
                    <td>8492037</td>
                </tr>

                <tr>
                    <td>111</td>
                    <td class="application">Députy First Class </td>
                    <td>MUSTAFI Qazim</td>
                    <td>8828019</td>
                </tr>

                <tr>
                    <td>117</td>
                    <td class="application">Députy First Class</td>
                    <td>JACKSON Christopher</td>
                    <td></td>
                </tr>

                <tr>
                    <td>101</td>
                    <td class="application">Députy First Class</td>
                    <td>BROWN Lea</td>
                    <td>4020066</td>
                </tr>

                <tr>
                    <td>121</td>
                    <td class="application">Députy First Class</td>
                    <td>O'CONNOR Carter </td>
                    <td>3977405</td>
                </tr>


                <tr>
                    <td>188</td>
                    <td class="application">Députy Second Class</td>
                    <td>LUCKY Kalubi</td>
                    <td></td>
                </tr>

                <tr>
                    <td>150</td>
                    <td class="application">Députy Second Class</td>
                    <td>MC MANAGHAN Will</td>
                    <td>9008432</td>
                </tr>

                <tr>
                    <td>139</td>
                    <td class="application">Députy Second Class</td>
                    <td>WIDNEY Steven</td>
                    <td>4984036</td>
                </tr>

                <tr>
                    <td>107</td>
                    <td class="application">Probatory Députy</td>
                    <td>WILLIAMS Andrew</td>
                    <td></td>
                </tr>

                <tr>
                    <td>147</td>
                    <td class="application">Probatory Députy </td>
                    <td>LOSA Dylan </td>
                    <td>1179389</td>
                </tr>

                <tr>
                    <td>141</td>
                    <td class="application">Probatory Députy</td>
                    <td>IVANOV Artiome</td>
                    <td>5039693</td>
                </tr>

                <tr>
                    <td>183</td>
                    <td class="application">Probatory Députy </td>
                    <td>HAMILTON Oliver</td>
                    <td></td>
                </tr>

                <tr>
                    <td>104</td>
                    <td class="application">Probatory Députy </td>
                    <td>ROUSSEL Max</td>
                    <td></td>
                </tr>

                <tr>
                    <td>122</td>
                    <td class="application">Probatory Députy </td>
                    <td>HAMILTON Tom</td>
                    <td></td>
                </tr>

                <tr>
                    <td>156</td>
                    <td class="application">Probatory Députy </td>
                    <td>MCGARRETTE Andrew </td>
                    <td></td>
                </tr>


            </tbody>

        </table>

    </section>

    <footer>
        <?php include('footer.php'); ?>
        </footer>

</body>