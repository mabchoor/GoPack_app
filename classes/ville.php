<?php 
/*('pdo.php');
class ville{
    var $region;
    var $ville;
    var $access;
    public function __construct( $region, $ville){
        $this->region=$region;
        $this->ville=$ville;
        
        $this->access = new database();
        }
    public function choisiregion(){
        $sql="select * from region  " ;
            $this->access->query($sql);
            $this->access->execute();
           $result= $this->access->result();
          /* foreach($result as $reg){
            echo <<<section
               <option value="$reg->id">$reg->region</option>
               section;
*//*
return $result;
           }
    public function choisirville($id){
        $sql="select * from ville where region = $id" ;
        $this->access->query($sql);
        $this->access->execute();
       $result= $this->access->result();
    //   echo json_encode($result);
   
    }


}*/
//$log= new connexion($use,$pas);

?>

      <!-- Script by hscripts.com -->
<select name=slist>
<script language="javascript">
var states = new Array("Agadir", "Al Hoceima", "Azilal", "Beni Mellal", "Ben Slimane", "Boulemane", "Casablanca", "Chaouen", "El Jadida", "El Kelaa des Sraghna", "Er Rachidia", "Essaouira", "Fes", "Figuig", "Guelmim", "Ifrane", "Kenitra", "Khemisset", "Khenifra", "Khouribga", "Laayoune", "Larache", "Marrakech", "Meknes", "Nador", "Ouarzazate", "Oujda", "Rabat-Sale", "Safi", "Settat", "Sidi Kacem", "Tangier", "Tan-Tan", "Taounate", "Taroudannt", "Tata", "Taza", "Tetouan", "Tiznit");
for(var hi=0; hi<states.length; hi++)
document.write("<option value=\""+states[hi]+"\">"+states[hi]+"</option>");
</script>
</select>
<!-- Script by hscripts.com -->
