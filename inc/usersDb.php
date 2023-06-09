<?php
$users = [
    [
        'id'=>'1',
        'lastname'=>'Ladmin',
        'name'=>'Jean',
        'pseudo'=>'jeanjean',
        'email'=>'jladmin@gmail.com',
        'status'=>'administrateur',
        'pwd'=>'1'
    ],
    [
        'id'=>'2',
        'lastname'=>'Lemodo',
        'name'=>'Luc',
        'pseudo'=>'lulu',
        'email'=>'luc.lemodo@gmail.com',
        'status'=>'modérateur',
        'pwd'=>'2'
        
    ],
    [
        'id'=>'3',
        'lastname'=>'Legameur',
        'name'=>'Aristide',
        'pseudo'=>'GG34',
        'email'=>'Aristid.goat@gmail.com',
        'status'=>'joueur',
        'pwd'=>'3'
    ],
    [
        'id'=>'4',
        'lastname'=>'Sky',
        'name'=>'Luc',
        'pseudo'=>'lulusky',
        'email'=>'luc.sky@gmail.com',
        'status'=>'modérateur',
        'pwd'=>'4'
    ],
    [
        'id'=>'5',
        'lastname'=>'Pele',
        'name'=>'Leroi',
        'pseudo'=>'Pele09',
        'email'=>'pelebrasil@gmail.com',
        'status'=>'joueur',
        'pwd'=>'5'
    ],
    [
        'id'=>'6',
        'lastname'=>'Platini',
        'name'=>'Michel',
        'pseudo'=>'michou',
        'email'=>'michelPlatini@aol.com',
        'status'=>'joueur',
        'pwd'=>'6'
    ],
    [
        'id'=>'7',
        'lastname'=>'Jolie',
        'name'=>'Angelina',
        'pseudo'=>'Angie',
        'email'=>'angelina.jolie@gmail.com',
        'status'=>'joueur',
        'pwd'=>'7'
    ],
    [
        'id'=>'8',
        'lastname'=>'Dupont',
        'name'=>'Luc',
        'pseudo'=>'lu645',
        'email'=>'luc.Dupont@gmail.com',
        'status'=>'joueur',
        'pwd'=>'8'
    ],
    [
        'id'=>'9',
        'lastname'=>'Brindacier',
        'name'=>'Fifi',
        'pseudo'=>'fifi87',
        'email'=>'fifi.brindacier@gmail.com',
        'status'=>'joueur',
        'pwd'=>'9'
    ],
    [
        'id'=>'10',
        'lastname'=>'Travolta',
        'name'=>'John',
        'pseudo'=>'pulpfiction',
        'email'=>'john.travolta@gmail.com',
        'status'=>'joueur',
        'pwd'=>'10'
    ],
    [
        'id'=>'11',
        'lastname'=>'Casta',
        'name'=>'Laetitia',
        'pseudo'=>'casta02',
        'email'=>'laetitia.casta@gmail.com',
        'status'=>'joueur',
        'pwd'=>'11'
    ],
    [
        'id'=>'12',
        'lastname'=>'Docteur',
        'name'=>'Dre',
        'pseudo'=>'nwa',
        'email'=>'dre@gmail.com',
        'status'=>'joueur',
        'pwd'=>'12'
    ],
    [
        'id'=>'13',
        'lastname'=>'Curie',
        'name'=>'Marie',
        'pseudo'=>'marie65',
        'email'=>'M.Curie@gmail.com',
        'status'=>'joueur',
        'pwd'=>'13'
    ],
    [
        'id'=>'14',
        'lastname'=>'Pauleta',
        'name'=>'Pedro Miguel',
        'pseudo'=>'pedro09',
        'email'=>'PM.Pauleta@gmail.com',
        'status'=>'joueur',
        'pwd'=>'14'
    ],
    [
        'id'=>'15',
        'lastname'=>'Depardieu',
        'name'=>'Gérard',
        'pseudo'=>'Don Perignon',
        'email'=>'Gege@caramail.com',
        'status'=>'joueur',
        'pwd'=>'15'
    ],
    [
        'id'=>'16',
        'lastname'=>'Ali',
        'name'=>'Mohamed',
        'pseudo'=>'aliBoxe',
        'email'=>'momo.ali@gmail.com',
        'status'=>'joueur',
        'pwd'=>'16'
    ],
    [
        'id'=>'17',
        'lastname'=>'M\'Bappe',
        'name'=>'Kylian',
        'pseudo'=>'kyky07',
        'email'=>'K.mbappe@gmail.com',
        'status'=>'joueur',
        'pwd'=>'27'
    ],
    [
        'id'=>'18',
        'lastname'=>'Sissi',
        'name'=>'Princesse',
        'pseudo'=>'Sissi_du_93',
        'email'=>'P.sissi@gmail.com',
        'status'=>'joueur',
        'pwd'=>'28'
    ],
    [
        'id'=>'19',
        'lastname'=>'Sawyer',
        'name'=>'Tom',
        'pseudo'=>'tomtom',
        'email'=>'tSawyer@gmail.com',
        'status'=>'joueur',
        'pwd'=>'29'
    ],
    [
        'id'=>'20',
        'lastname'=>'Coffee',
        'name'=>'john',
        'pseudo'=>'cofcof',
        'email'=>'j.coffee@gmail.com',
        'status'=>'joueur',
        'pwd'=>'31'
    ],
];

$totalUsers=count($users);    // On compte le nombre d'utilisateurs total

// On compte le nombre d'admin, de modérateur et de joueurs . source : https://stackoverflow.com/a/53308963
$totalAdmin = array_count_values(array_column($users, 'status'))['administrateur'];
$totalMod = array_count_values(array_column($users, 'status'))['modérateur'];
$totalGamer = array_count_values(array_column($users, 'status'))['joueur'];
?>