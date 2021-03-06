<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CidadesCearaSeeder extends Seeder {

    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        DB::table('cities')->insert([
        	['city' => 'Abaiara', 'state_id' => 6],
            ['city' => 'Acarape', 'state_id' => 6],
            ['city' => 'Acaraú', 'state_id' => 6],
            ['city' => 'Acopiara', 'state_id' => 6],
            ['city' => 'Aiuaba', 'state_id' => 6],
            ['city' => 'Alcântaras', 'state_id' => 6],
            ['city' => 'Altaneira', 'state_id' => 6],
            ['city' => 'Alto Santo', 'state_id' => 6],
            ['city' => 'Amontada', 'state_id' => 6],
            ['city' => 'Antonina do Norte', 'state_id' => 6],
            ['city' => 'Apuiarés', 'state_id' => 6],
            ['city' => 'Aquiraz', 'state_id' => 6],
            ['city' => 'Aracati', 'state_id' => 6],
            ['city' => 'Aracoiaba', 'state_id' => 6],
            ['city' => 'Ararendá', 'state_id' => 6],
            ['city' => 'Araripe', 'state_id' => 6],
            ['city' => 'Aratuba', 'state_id' => 6],
            ['city' => 'Arneiroz', 'state_id' => 6],
            ['city' => 'Assaré', 'state_id' => 6],
            ['city' => 'Aurora', 'state_id' => 6],
            ['city' => 'Baixio', 'state_id' => 6],
            ['city' => 'Banabuiú', 'state_id' => 6],
            ['city' => 'Barbalha', 'state_id' => 6],
            ['city' => 'Barreira', 'state_id' => 6],
            ['city' => 'Barro', 'state_id' => 6],
            ['city' => 'Barroquinha', 'state_id' => 6],
            ['city' => 'Baturité', 'state_id' => 6],
            ['city' => 'Beberibe', 'state_id' => 6],
            ['city' => 'Bela Cruz', 'state_id' => 6],
            ['city' => 'Boa Viagem', 'state_id' => 6],
            ['city' => 'Brejo Santo', 'state_id' => 6],
            ['city' => 'Camocim', 'state_id' => 6],
            ['city' => 'Campos Sales', 'state_id' => 6],
            ['city' => 'Canindé', 'state_id' => 6],
            ['city' => 'Capistrano', 'state_id' => 6],
            ['city' => 'Caridade', 'state_id' => 6],
            ['city' => 'Cariré', 'state_id' => 6],
            ['city' => 'Caririaçu', 'state_id' => 6],
            ['city' => 'Cariús', 'state_id' => 6],
            ['city' => 'Carnaubal', 'state_id' => 6],
            ['city' => 'Cascavel', 'state_id' => 6],
            ['city' => 'Catarina', 'state_id' => 6],
            ['city' => 'Catunda', 'state_id' => 6],
            ['city' => 'Caucaia', 'state_id' => 6],
            ['city' => 'Cedro', 'state_id' => 6],
            ['city' => 'Chaval', 'state_id' => 6],
            ['city' => 'Choró', 'state_id' => 6],
            ['city' => 'Chorozinho', 'state_id' => 6],
            ['city' => 'Coreaú', 'state_id' => 6],
            ['city' => 'Crateús', 'state_id' => 6],
            ['city' => 'Crato', 'state_id' => 6],
            ['city' => 'Croatá', 'state_id' => 6],
            ['city' => 'Cruz', 'state_id' => 6],
            ['city' => 'Deputado Irapuan Pinheiro', 'state_id' => 6],
            ['city' => 'Ererê', 'state_id' => 6],
            ['city' => 'Eusébio', 'state_id' => 6],
            ['city' => 'Farias Brito', 'state_id' => 6],
            ['city' => 'Forquilha', 'state_id' => 6],
            ['city' => 'Fortaleza', 'state_id' => 6],
            ['city' => 'Fortim', 'state_id' => 6],
            ['city' => 'Frecheirinha', 'state_id' => 6],
            ['city' => 'General Sampaio', 'state_id' => 6],
            ['city' => 'Graça', 'state_id' => 6],
            ['city' => 'Granja', 'state_id' => 6],
            ['city' => 'Granjeiro', 'state_id' => 6],
            ['city' => 'Groaíras', 'state_id' => 6],
            ['city' => 'Guaiúba', 'state_id' => 6],
            ['city' => 'Guaraciaba do Norte', 'state_id' => 6],
            ['city' => 'Guaramiranga', 'state_id' => 6],
            ['city' => 'Hidrolândia', 'state_id' => 6],
            ['city' => 'Horizonte', 'state_id' => 6],
            ['city' => 'Ibaretama', 'state_id' => 6],
            ['city' => 'Ibiapina', 'state_id' => 6],
            ['city' => 'Ibicuitinga', 'state_id' => 6],
            ['city' => 'Icapuí', 'state_id' => 6],
            ['city' => 'Icó', 'state_id' => 6],
            ['city' => 'Iguatu', 'state_id' => 6],
            ['city' => 'Independência', 'state_id' => 6],
            ['city' => 'Ipaporanga', 'state_id' => 6],
            ['city' => 'Ipaumirim', 'state_id' => 6],
            ['city' => 'Ipu', 'state_id' => 6],
            ['city' => 'Ipueiras', 'state_id' => 6],
            ['city' => 'Iracema', 'state_id' => 6],
            ['city' => 'Irauçuba', 'state_id' => 6],
            ['city' => 'Itaiçaba', 'state_id' => 6],
            ['city' => 'Itaitinga', 'state_id' => 6],
            ['city' => 'Itapagé', 'state_id' => 6],
            ['city' => 'Itapipoca', 'state_id' => 6],
            ['city' => 'Itapiúna', 'state_id' => 6],
            ['city' => 'Itarema', 'state_id' => 6],
            ['city' => 'Itatira', 'state_id' => 6],
            ['city' => 'Jaguaretama', 'state_id' => 6],
            ['city' => 'Jaguaribara', 'state_id' => 6],
            ['city' => 'Jaguaribe', 'state_id' => 6],
            ['city' => 'Jaguaruana', 'state_id' => 6],
            ['city' => 'Jardim', 'state_id' => 6],
            ['city' => 'Jati', 'state_id' => 6],
            ['city' => 'Jijoca de Jericoacoara', 'state_id' => 6],
            ['city' => 'Juazeiro do Norte', 'state_id' => 6],
            ['city' => 'Jucás', 'state_id' => 6],
            ['city' => 'Lavras da Mangabeira', 'state_id' => 6],
            ['city' => 'Limoeiro do Norte', 'state_id' => 6],
            ['city' => 'Madalena', 'state_id' => 6],
            ['city' => 'Maracanaú', 'state_id' => 6],
            ['city' => 'Maranguape', 'state_id' => 6],
            ['city' => 'Marco', 'state_id' => 6],
            ['city' => 'Martinópole', 'state_id' => 6],
            ['city' => 'Massapê', 'state_id' => 6],
            ['city' => 'Mauriti', 'state_id' => 6],
            ['city' => 'Meruoca', 'state_id' => 6],
            ['city' => 'Milagres', 'state_id' => 6],
            ['city' => 'Milhã', 'state_id' => 6],
            ['city' => 'Miraíma', 'state_id' => 6],
            ['city' => 'Missão Velha', 'state_id' => 6],
            ['city' => 'Mombaça', 'state_id' => 6],
            ['city' => 'Monsenhor Tabosa', 'state_id' => 6],
            ['city' => 'Morada Nova', 'state_id' => 6],
            ['city' => 'Moraújo', 'state_id' => 6],
            ['city' => 'Morrinhos', 'state_id' => 6],
            ['city' => 'Mucambo', 'state_id' => 6],
            ['city' => 'Mulungu', 'state_id' => 6],
            ['city' => 'Nova Olinda', 'state_id' => 6],
            ['city' => 'Nova Russas', 'state_id' => 6],
            ['city' => 'Novo Oriente', 'state_id' => 6],
            ['city' => 'Ocara', 'state_id' => 6],
            ['city' => 'Orós', 'state_id' => 6],
            ['city' => 'Pacajus', 'state_id' => 6],
            ['city' => 'Pacatuba', 'state_id' => 6],
            ['city' => 'Pacoti', 'state_id' => 6],
            ['city' => 'Pacujá', 'state_id' => 6],
            ['city' => 'Palhano', 'state_id' => 6],
            ['city' => 'Palmácia', 'state_id' => 6],
            ['city' => 'Paracuru', 'state_id' => 6],
            ['city' => 'Paraipaba', 'state_id' => 6],
            ['city' => 'Parambu', 'state_id' => 6],
            ['city' => 'Paramoti', 'state_id' => 6],
            ['city' => 'Pedra Branca', 'state_id' => 6],
            ['city' => 'Penaforte', 'state_id' => 6],
            ['city' => 'Pentecoste', 'state_id' => 6],
            ['city' => 'Pereiro', 'state_id' => 6],
            ['city' => 'Pindoretama', 'state_id' => 6],
            ['city' => 'Piquet Carneiro', 'state_id' => 6],
            ['city' => 'Pires Ferreira', 'state_id' => 6],
            ['city' => 'Poranga', 'state_id' => 6],
            ['city' => 'Porteiras', 'state_id' => 6],
            ['city' => 'Potengi', 'state_id' => 6],
            ['city' => 'Potiretama', 'state_id' => 6],
            ['city' => 'Quiterianópolis', 'state_id' => 6],
            ['city' => 'Quixadá', 'state_id' => 6],
            ['city' => 'Quixelô', 'state_id' => 6],
            ['city' => 'Quixeramobim', 'state_id' => 6],
            ['city' => 'Quixeré', 'state_id' => 6],
            ['city' => 'Redenção', 'state_id' => 6],
            ['city' => 'Reriutaba', 'state_id' => 6],
            ['city' => 'Russas', 'state_id' => 6],
            ['city' => 'Saboeiro', 'state_id' => 6],
            ['city' => 'Salitre', 'state_id' => 6],
            ['city' => 'Santa Quitéria', 'state_id' => 6],
            ['city' => 'Santana do Acaraú', 'state_id' => 6],
            ['city' => 'Santana do Cariri', 'state_id' => 6],
            ['city' => 'São Benedito', 'state_id' => 6],
            ['city' => 'São Gonçalo do Amarante', 'state_id' => 6],
            ['city' => 'São João do Jaguaribe', 'state_id' => 6],
            ['city' => 'São Luís do Curu', 'state_id' => 6],
            ['city' => 'Senador Pompeu', 'state_id' => 6],
            ['city' => 'Senador Sá', 'state_id' => 6],
            ['city' => 'Sobral', 'state_id' => 6],
            ['city' => 'Solonópole', 'state_id' => 6],
            ['city' => 'Tabuleiro do Norte', 'state_id' => 6],
            ['city' => 'Tamboril', 'state_id' => 6],
            ['city' => 'Tarrafas', 'state_id' => 6],
            ['city' => 'Tauá', 'state_id' => 6],
            ['city' => 'Tejuçuoca', 'state_id' => 6],
            ['city' => 'Tianguá', 'state_id' => 6],
            ['city' => 'Trairi', 'state_id' => 6],
            ['city' => 'Tururu', 'state_id' => 6],
            ['city' => 'Ubajara', 'state_id' => 6],
            ['city' => 'Umari', 'state_id' => 6],
            ['city' => 'Umirim', 'state_id' => 6],
            ['city' => 'Uruburetama', 'state_id' => 6],
            ['city' => 'Uruoca', 'state_id' => 6],
            ['city' => 'Varjota', 'state_id' => 6],
            ['city' => 'Várzea Alegre', 'state_id' => 6],
            ['city' => 'Viçosa do Ceará', 'state_id' => 6]
        ]);

        $this->command->info('Cidades do Ceará importadas com sucesso!');
    }
}