<?php
function validateInput($prompt, $errorMessage) {
    while (true) {
        echo $prompt;
        $input = trim(fgets(STDIN));
        
        if (!empty($input)) {
            return $input;
        }
        echo $errorMessage . "\n";
    }
}

function startWerewolfGame() {
    echo "=== GAME WEREWOLF ===\n";
    
    $nama = validateInput(
        "Masukkan nama kamu: ",
        "Penting! Nama harus diisi!"
    );
    
    $peran = "";
    $validRoles = ['penyihir', 'guard', 'werewolf'];
    
    while (true) {
        echo "Masukkan peran kamu (Penyihir/Guard/Werewolf): ";
        $peran = strtolower(trim(fgets(STDIN)));
        
        if (empty($peran)) {
            echo "Halo $nama, Pilih peranmu untuk memulai game!\n";
            continue;
        }
        
        if (in_array($peran, $validRoles)) {
            break;
        }
        
        echo "Penting! Peran harus Penyihir, Guard, atau Werewolf!\n";
    }
    
    echo "\nSelamat datang di Dunia Werewolf, $nama\n";
    
    switch ($peran) {
        case 'penyihir':
            echo "Halo Penyihir $nama, kamu dapat melihat siapa yang menjadi werewolf!\n";
            break;
        case 'guard':
            echo "Halo Guard $nama, kamu akan membantu melindungi temanmu dari serangan werewolf.\n";
            break;
        case 'werewolf':
            echo "Halo Werewolf $nama, Kamu akan memakan mangsa setiap malam!\n";
            break;
    }
}

startWerewolfGame();
echo "\nPermainan dimulai! Selamat bermain!\n";
?>