<?php defined('BASEPATH') OR exit('No direct script access allowed');
  
class Fortune_model extends CI_Model {

	function __construct(){

		parent::__construct();
        $this->load->database();

    }
    
    function rand_fortune(){
        
        $sql = "SELECT * FROM fortune
            WHERE is_active = 1
            ORDER BY RAND()
            LIMIT 1";
 
        $sql = $this->db->query($sql);
        $result = $sql->result_array();  
        return $result[0];   
    }

    function add_fortune($data){
        
        $this->db->insert("fortune",$data);
		return $this->db->insert_id();
    }

    function remove_fortune($id){
        
        $sql = "UPDATE fortune 
            SET is_active = 0
            WHERE id = ".$id;
        $sql = $this->db->query($sql); 
    }

    function seeder(){
        $sql = "CREATE TABLE IF NOT EXISTS fortune (
                id INT NOT NULL AUTO_INCREMENT,
                fortune VARCHAR(250) NULL,
                is_active INT NULL,
                PRIMARY KEY (id)
            )";
        $sql = $this->db->query($sql); 

        $sql1 = "INSERT INTO fortune
                (fortune, is_active)
            VALUES
                ('A friend''s frown is better than a fool''s smile.',1),
                ('A friend in need is a friend indeed.',1),
                ('A friend is easier lost than found.',1),
                ('A friend to everybody is a friend to nobody.',1),
                ('A problem shared is a problem halved.',1),
                ('A true friend is someone who reaches for your hand, but touches your heart.',1),
                ('False friends are worse than open enemies.',1),
                ('Flattery is all right so long as you don''t inhale.',1),
                ('Give credit where credit is due.',1),
                ('Grief divided is made lighter.',1),
                ('Memory is the treasure of the mind.',1),
                ('Nothing dries sooner than a tear.',1),
                ('Old friends and old wine are best.',1),
                ('The best of friends must part.',1),
                ('The best things are not bought and sold.',1),
                ('There is no better looking-glass than an old friend.',1),
                ('To err is human (To forgive divine).',1),
                ('Two cannot fall out if one does not choose.',1),
                ('A loveless life is a living death.',1),
                ('Absence makes the heart grow fonder.',1),
                ('All''s fair in love and war.',1),
                ('Beauty is in the eye of the beholder.',1),
                ('Before you meet the handsome prince you have to kiss a lot of toads.',1),
                ('Better to have loved and lost, than to have never loved at all.',1),
                ('Cold hands, warm heart.',1),
                ('Distance makes the heart grow fonder.',1),
                ('Faint heart never won fair lady.',1),
                ('First impressions are the most lasting.',1),
                ('Hatred is as blind as love.',1),
                ('Love and a cough cannot be hid.',1),
                ('Love does much but money does all.',1),
                ('Love levels all inequalities.',1),
                ('Love makes a good eye squint.',1),
                ('Love sees no faults.',1),
                ('Love sought is good, but given unsought is better.',1),
                ('Love to live and live to love.',1),
                ('Love with life is heaven; and life unloving, hell.',1),
                ('Man is the head but woman turns it.',1),
                ('Marry in haste, repent at leisure.',1),
                ('The course of love never did run smooth.',1),
                ('The Lord loveth a cheerful liar.',1),
                ('There is a thin line between love and hate.',1),
                ('To eat one''s heart out.',1),
                ('True beauty lies within.',1),
                ('You can''t live on bread alone.',1),
                ('A good friend is one''s nearest relation.',1),
                ('A man is known by the company he keeps.',1),
                ('A man of straw needs a woman of gold.',1),
                ('A wink is as good as a nod, to a blind man.',1),
                ('An injury is forgiven better than an injury revenged.',1),
                ('Anger and hate hinder good counsel.',1),
                ('Appearances are deceptive.',1),
                ('At a round table there''s no dispute about the place.',1),
                ('Attack is the best form of defense',1),
                ('Be slow in choosing, but slower in changing.',1),
                ('Behind every great man stands a strong woman.',1),
                ('Blood is thicker than water.',1),
                ('Cheerfulness smooths the road of life.',1),
                ('Confess and be hanged.',1),
                ('Conscience makes cowards of us all.',1),
                ('Don''t blow your own trumpet.',1),
                ('Do as you would be done by.',1),
                ('Do unto others as you would have them do to you.',1),
                ('Grow angry slowly; there''s plenty of time.',1),
                ('He bears misery best that hides it most.',1),
                ('He that hurts another, hurts himself.',1),
                ('He who wronged you will hate you.',1),
                ('Heavy givers are light complainers.',1),
                ('I am rubber and you are glue. Your words bounce off me and stick to you.',1),
                ('If you lose your temper, don''t look for it.',1),
                ('It''s not over till it''s over.',1),
                ('Joy shared is double joy; grief shared is (only) half grief.',1),
                ('Laugh and the world laughs with you. Cry and you cry alone.',1),
                ('Never let the sun set on angry heart.',1),
                ('Never let the sun go down on your anger.',1),
                ('Never let the sun set on thy wrath.',1),
                ('Never quarrel with one''s bread and butter.',1),
                ('No man or woman is worth your tears, and the one who is, won''t make you cry.',1),
                ('Open confession is good for the soul.',1),
                ('Out of sight, out of mind.',1),
                ('Patience is a virtue.',1),
                ('Persuasion is better than force.',1),
                ('Spare the rod and spoil the child.',1),
                ('Temper is so good a thing that we should never lose it.',1),
                ('To the world you may be one person, but to one person, you may be the world.',1),
                ('Wondrous is the strength of cheerfulness.',1),
                ('You made your bed, now you must lie in it.',1),
                ('A bully is always a coward.',1),
                ('A handsome shoe often pinches the foot.',1),
                ('A good thing is all the sweeter when won with pain.',1),
                ('A man too careful of danger lives in continual torment.',1),
                ('A miss is as good as a mile.',1),
                ('Adversity flatters no man',1),
                ('Adversity and loss make a man wise',1),
                ('All promises are either broken or kept.',1),
                ('All things come to those that wait.',1),
                ('An eye for an eye and a tooth for a tooth.',1),
                ('An open door may tempt a saint.',1),
                ('As one door closes, another always opens.',1),
                ('As you go through life, make this your goal, watch the doughnut and not the hole.',1);";

        $this->db->query($sql1);
    }

}