<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elements</title>
    <script type="text/javascript" src="script.js" defer></script>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>
<body>
    <div>
        <input type="text" id="singleElement" placeholder="Enter Chemical symbol, as seen in the table below."><br>
        <button onclick="singleElement()">Element</button>
    </div>
<div class="tableAlign">
    <table>
        <tr>
            <th>info</th>
            <th>Conslusion</th>
        </tr>
        <tr>
            <td>atom</td>
            <td id="atom"></td>
        </tr>
        <tr>
            <td>atomNumber</td>
            <td id="atomNumber"></td>
        </tr>
        <tr>
            <td>Radioactive</td>
            <td id="radioActive"></td>
        </tr>
        <tr>
          <td>Kind</td>
          <td id="kind"></td>
        </tr>
        <tr>
           <td>Boiling point</td>
           <td id="boiling"></td>
        </tr>
        <tr>
           <td>Atomic mass</td>
           <td id="mass"></td>
        </tr>
    </table>
</div>
<p id="chemicalFormula"></p>
<hr>

<div id="tableAlign">
<!--Periodic table-->
        <table class="periodicTable">
            <tr class="periodicTable">
                <td class="DarkBlue">H</td>
              <?php
                for ($i = 0; $i < 16; $i++) {
                    echo "<td class='periodicTable'></td>";
                }
              ?>
              <td class="DarkPurple">He</td>
            </tr>
            <tr>
                <td class="DarkRed">Li</td>
                <td class="DarkOrange">Be</td>
                <?php
                    for ($j = 0; $j < 10; $j++) {
                        echo "<td class='periodicTable'></td>";
                    }
                ?>
                <td class="lightBlue">B</td>
                <td class="DarkBlue">C</td>
                <td class="DarkBlue">N</td>
                <td class="DarkBlue">O</td>
                <td class="LightPurple">F</td>
                <td class="DarkPurple">Ne</td>
            </tr>
            <tr>
                <td class="DarkRed">Na</td>
                <td class="DarkOrange">Mg</td>
                <?php
                    for ($x = 0; $x < 10; $x++) {
                        echo "<td class='periodicTable'></td>";
                    }
                ?>
                <td class="DarkGreen">Al</td>
                <td class="lightBlue">Si</td>
                <td class="DarkBlue">P</td>
                <td class="DarkBlue">S</td>
                <td class="LightPurple">Cl</td>
                <td class="DarkPurple">Ar</td>
            </tr>
            <tr>
                <td class="DarkRed">K</td>
                <td class="DarkOrange">Ca</td>
                <td class="yellow">Sc</td>
                <td class="yellow">Ti</td>
                <td class="yellow">V</td>
                <td class="yellow">Cr</td>
                <td class="yellow">Mn</td>
                <td class="yellow">Fe</td>
                <td class="yellow">Co</td>
                <td class="yellow">Ni</td>
                <td class="yellow">Cu</td>
                <td class="yellow">Zn</td>
                <td class="DarkGreen">Ga</td>
                <td class="lightBlue">Ge</td>
                <td class="lightBlue">As</td>
                <td class="DarkBlue">Se</td>
                <td class="LightPurple">Br</td>
                <td class="DarkPurple">Kr</td>
            </tr>
            <tr>
                <td class="DarkRed">Rb</td>
                <td class="DarkOrange">Sr</td>
                <td class="yellow">Y</td>
                <td class="yellow">Zr</td>
                <td class="yellow">Nb</td>
                <td class="yellow">Mo</td>
                <td class="yellow">Tc</td>
                <td class="yellow">Ru</td>
                <td class="yellow">Rh</td>
                <td class="yellow">Pd</td>
                <td class="yellow">Ag</td>
                <td class="yellow">Cd</td>
                <td class="DarkGreen">In</td>
                <td class="DarkGreen">Sn</td>
                <td class="lightBlue">Sb</td>
                <td class="lightBlue">Te</td>
                <td class="LightPurple">I</td>
                <td class="DarkPurple">Xe</td>
            </tr>
            <tr>
                <td class="DarkRed">Cs</td>
                <td class="DarkOrange">Ba</td>
                <td id="FirstNumering" class="LightPurple">57-71</td>
                <td class="yellow">Hf</td>
                <td class="yellow">Ta</td>
                <td class="yellow">W</td>
                <td class="yellow">Re</td>
                <td class="yellow">Os</td>
                <td class="yellow">Ir</td>
                <td class="yellow">Pt</td>
                <td class="yellow">Au</td>
                <td class="yellow">Hg</td>
                <td class="DarkGreen">Tl</td>
                <td class="DarkGreen">Pb</td>
                <td class="DarkGreen">Bi</td>
                <td class="lightBlue">Po</td>
                <td class="LightPurple">At</td>
                <td class="DarkPurple">Rn</td>
            </tr>
            <tr>
                <td class="DarkRed">Fr</td>
                <td class="DarkOrange">Ra</td>
                <td id="SecondNumering" class="pink">89-103</td>
                <td class="yellow">Rf</td>
                <td class="yellow">Db</td>
                <td class="yellow">Sg</td>
                <td class="yellow">Bh</td>
                <td class="yellow">Hs</td>
                <td class="yellow">Mt</td>
                <td class="yellow">Ds</td>
                <td class="yellow">Rg</td>
                <td class="yellow">Cn</td>
                <td class="DarkGreen">Nh</td>
                <td class="DarkGreen">Fl</td>
                <td class="DarkGreen">Mc</td>
                <td class="DarkGreen">Lv</td>
                <td class="LightPurple">Uus</td>
                <td class="DarkPurple">Uuo</td>
            </tr>
            </table>
        </div>

    <div class="tablePadding">
        <table class="stylingTable">
            <tr>
                <td class="LightPurple">La</td>
                <td class="LightPurple">Ce</td>
                <td class="LightPurple">Pr</td>
                <td class="LightPurple">Nd</td>
                <td class="LightPurple">Pm</td>
                <td class="LightPurple">Sm</td>
                <td class="LightPurple">Eu</td>
                <td class="LightPurple">Gd</td>
                <td class="LightPurple">Tb</td>
                <td class="LightPurple">Dy</td>
                <td class="LightPurple">Ho</td>
                <td class="LightPurple">Er</td>
                <td class="LightPurple">Tm</td>
                <td class="LightPurple">Yb</td>
                <td class="LightPurple">Lu</td>
            </tr>
            <tr>
                <td class="pink">Ac</td>
                <td class="pink">Th</td>
                <td class="pink">Pa</td>
                <td class="pink">U</td>
                <td class="pink">Np</td>
                <td class="pink">Pu</td>
                <td class="pink">Am</td>
                <td class="pink">Cm</td>
                <td class="pink">Bk</td>
                <td class="pink">Cf</td>
                <td class="pink">Es</td>
                <td class="pink">Fm</td>
                <td class="pink">Md</td>
                <td class="pink">No</td>
                <td class="pink">Lr</td>
            </tr>
        </table>
    </div>
    </body>
</html>
