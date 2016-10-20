<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CidadesPernambucoSeeder extends Seeder {

    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        DB::table('cities')->insert([
        	['city' => 'Abreu e Lima', 'state_id' => 17],
            ['city' => 'Afogados da Ingazeira', 'state_id' => 17],
            ['city' => 'Afrânio', 'state_id' => 17],
            ['city' => 'Agrestina', 'state_id' => 17],
            ['city' => 'Água Preta', 'state_id' => 17],
            ['city' => 'Águas Belas', 'state_id' => 17],
            ['city' => 'Alagoinha', 'state_id' => 17],
            ['city' => 'Aliança', 'state_id' => 17],
            ['city' => 'Altinho', 'state_id' => 17],
            ['city' => 'Amaraji', 'state_id' => 17],
            ['city' => 'Angelim', 'state_id' => 17],
            ['city' => 'Araçoiaba', 'state_id' => 17],
            ['city' => 'Araripina', 'state_id' => 17],
            ['city' => 'Arcoverde', 'state_id' => 17],
            ['city' => 'Barra de Guabiraba', 'state_id' => 17],
            ['city' => 'Barreiros', 'state_id' => 17],
            ['city' => 'Belém de Maria', 'state_id' => 17],
            ['city' => 'Belém de São Francisco', 'state_id' => 17],
            ['city' => 'Belo Jardim', 'state_id' => 17],
            ['city' => 'Betânia', 'state_id' => 17],
            ['city' => 'Bezerros', 'state_id' => 17],
            ['city' => 'Bodocó', 'state_id' => 17],
            ['city' => 'Bom Conselho', 'state_id' => 17],
            ['city' => 'Bom Jardim', 'state_id' => 17],
            ['city' => 'Bonito', 'state_id' => 17],
            ['city' => 'Brejão', 'state_id' => 17],
            ['city' => 'Brejinho', 'state_id' => 17],
            ['city' => 'Brejo da Madre de Deus', 'state_id' => 17],
            ['city' => 'Buenos Aires', 'state_id' => 17],
            ['city' => 'Buíque', 'state_id' => 17],
            ['city' => 'Cabo de Santo Agostinho', 'state_id' => 17],
            ['city' => 'Cabrobó', 'state_id' => 17],
            ['city' => 'Cachoeirinha', 'state_id' => 17],
            ['city' => 'Caetés', 'state_id' => 17],
            ['city' => 'Calçado', 'state_id' => 17],
            ['city' => 'Calumbi', 'state_id' => 17],
            ['city' => 'Camaragibe', 'state_id' => 17],
            ['city' => 'Camocim de São Félix', 'state_id' => 17],
            ['city' => 'Camutanga', 'state_id' => 17],
            ['city' => 'Canhotinho', 'state_id' => 17],
            ['city' => 'Capoeiras', 'state_id' => 17],
            ['city' => 'Carnaíba', 'state_id' => 17],
            ['city' => 'Carnaubeira da Penha', 'state_id' => 17],
            ['city' => 'Carpina', 'state_id' => 17],
            ['city' => 'Caruaru', 'state_id' => 17],
            ['city' => 'Casinhas', 'state_id' => 17],
            ['city' => 'Catende', 'state_id' => 17],
            ['city' => 'Cedro', 'state_id' => 17],
            ['city' => 'Chã de Alegria', 'state_id' => 17],
            ['city' => 'Chã Grande', 'state_id' => 17],
            ['city' => 'Condado', 'state_id' => 17],
            ['city' => 'Correntes', 'state_id' => 17],
            ['city' => 'Cortês', 'state_id' => 17],
            ['city' => 'Cumaru', 'state_id' => 17],
            ['city' => 'Cupira', 'state_id' => 17],
            ['city' => 'Custódia', 'state_id' => 17],
            ['city' => 'Dormentes', 'state_id' => 17],
            ['city' => 'Escada', 'state_id' => 17],
            ['city' => 'Exu', 'state_id' => 17],
            ['city' => 'Feira Nova', 'state_id' => 17],
            ['city' => 'Fernando de Noronha', 'state_id' => 17],
            ['city' => 'Ferreiros', 'state_id' => 17],
            ['city' => 'Flores', 'state_id' => 17],
            ['city' => 'Floresta', 'state_id' => 17],
            ['city' => 'Frei Miguelinho', 'state_id' => 17],
            ['city' => 'Gameleira', 'state_id' => 17],
            ['city' => 'Garanhuns', 'state_id' => 17],
            ['city' => 'Glória do Goitá', 'state_id' => 17],
            ['city' => 'Goiana', 'state_id' => 17],
            ['city' => 'Granito', 'state_id' => 17],
            ['city' => 'Gravatá', 'state_id' => 17],
            ['city' => 'Iati', 'state_id' => 17],
            ['city' => 'Ibimirim', 'state_id' => 17],
            ['city' => 'Ibirajuba', 'state_id' => 17],
            ['city' => 'Igarassu', 'state_id' => 17],
            ['city' => 'Iguaraci', 'state_id' => 17],
            ['city' => 'Ilha de Itamaracá', 'state_id' => 17],
            ['city' => 'Inajá', 'state_id' => 17],
            ['city' => 'Ingazeira', 'state_id' => 17],
            ['city' => 'Ipojuca', 'state_id' => 17],
            ['city' => 'Ipubi', 'state_id' => 17],
            ['city' => 'Itacuruba', 'state_id' => 17],
            ['city' => 'Itaíba', 'state_id' => 17],
            ['city' => 'Itambé', 'state_id' => 17],
            ['city' => 'Itapetim', 'state_id' => 17],
            ['city' => 'Itapissuma', 'state_id' => 17],
            ['city' => 'Itaquitinga', 'state_id' => 17],
            ['city' => 'Jaboatão dos Guararapes', 'state_id' => 17],
            ['city' => 'Jaqueira', 'state_id' => 17],
            ['city' => 'Jataúba', 'state_id' => 17],
            ['city' => 'Jatobá', 'state_id' => 17],
            ['city' => 'João Alfredo', 'state_id' => 17],
            ['city' => 'Joaquim Nabuco', 'state_id' => 17],
            ['city' => 'Jucati', 'state_id' => 17],
            ['city' => 'Jupi', 'state_id' => 17],
            ['city' => 'Jurema', 'state_id' => 17],
            ['city' => 'Lagoa do Carro', 'state_id' => 17],
            ['city' => 'Lagoa do Itaenga', 'state_id' => 17],
            ['city' => 'Lagoa do Ouro', 'state_id' => 17],
            ['city' => 'Lagoa dos Gatos', 'state_id' => 17],
            ['city' => 'Lagoa Grande', 'state_id' => 17],
            ['city' => 'Lajedo', 'state_id' => 17],
            ['city' => 'Limoeiro', 'state_id' => 17],
            ['city' => 'Macaparana', 'state_id' => 17],
            ['city' => 'Machados', 'state_id' => 17],
            ['city' => 'Manari', 'state_id' => 17],
            ['city' => 'Maraial', 'state_id' => 17],
            ['city' => 'Mirandiba', 'state_id' => 17],
            ['city' => 'Moreilândia', 'state_id' => 17],
            ['city' => 'Moreno', 'state_id' => 17],
            ['city' => 'Nazaré da Mata', 'state_id' => 17],
            ['city' => 'Olinda', 'state_id' => 17],
            ['city' => 'Orobó', 'state_id' => 17],
            ['city' => 'Orocó', 'state_id' => 17],
            ['city' => 'Ouricuri', 'state_id' => 17],
            ['city' => 'Palmares', 'state_id' => 17],
            ['city' => 'Palmeirina', 'state_id' => 17],
            ['city' => 'Panelas', 'state_id' => 17],
            ['city' => 'Paranatama', 'state_id' => 17],
            ['city' => 'Parnamirim', 'state_id' => 17],
            ['city' => 'Passira', 'state_id' => 17],
            ['city' => 'Paudalho', 'state_id' => 17],
            ['city' => 'Paulista', 'state_id' => 17],
            ['city' => 'Pedra', 'state_id' => 17],
            ['city' => 'Pesqueira', 'state_id' => 17],
            ['city' => 'Petrolândia', 'state_id' => 17],
            ['city' => 'Petrolina', 'state_id' => 17],
            ['city' => 'Poção', 'state_id' => 17],
            ['city' => 'Pombos', 'state_id' => 17],
            ['city' => 'Primavera', 'state_id' => 17],
            ['city' => 'Quipapá', 'state_id' => 17],
            ['city' => 'Quixaba', 'state_id' => 17],
            ['city' => 'Recife', 'state_id' => 17],
            ['city' => 'Riacho das Almas', 'state_id' => 17],
            ['city' => 'Ribeirão', 'state_id' => 17],
            ['city' => 'Rio Formoso', 'state_id' => 17],
            ['city' => 'Sairé', 'state_id' => 17],
            ['city' => 'Salgadinho', 'state_id' => 17],
            ['city' => 'Salgueiro', 'state_id' => 17],
            ['city' => 'Saloá', 'state_id' => 17],
            ['city' => 'Sanharó', 'state_id' => 17],
            ['city' => 'Santa Cruz', 'state_id' => 17],
            ['city' => 'Santa Cruz da Baixa Verde', 'state_id' => 17],
            ['city' => 'Santa Cruz do Capibaribe', 'state_id' => 17],
            ['city' => 'Santa Filomena', 'state_id' => 17],
            ['city' => 'Santa Maria da Boa Vista', 'state_id' => 17],
            ['city' => 'Santa Maria do Cambucá', 'state_id' => 17],
            ['city' => 'Santa Terezinha', 'state_id' => 17],
            ['city' => 'São Benedito do Sul', 'state_id' => 17],
            ['city' => 'São Bento do Una', 'state_id' => 17],
            ['city' => 'São Caitano', 'state_id' => 17],
            ['city' => 'São João', 'state_id' => 17],
            ['city' => 'São Joaquim do Monte', 'state_id' => 17],
            ['city' => 'São José da Coroa Grande', 'state_id' => 17],
            ['city' => 'São José do Belmonte', 'state_id' => 17],
            ['city' => 'São José do Egito', 'state_id' => 17],
            ['city' => 'São Lourenço da Mata', 'state_id' => 17],
            ['city' => 'São Vicente Ferrer', 'state_id' => 17],
            ['city' => 'Serra Talhada', 'state_id' => 17],
            ['city' => 'Serrita', 'state_id' => 17],
            ['city' => 'Sertânia', 'state_id' => 17],
            ['city' => 'Sirinhaém', 'state_id' => 17],
            ['city' => 'Solidão', 'state_id' => 17],
            ['city' => 'Surubim', 'state_id' => 17],
            ['city' => 'Tabira', 'state_id' => 17],
            ['city' => 'Tacaimbó', 'state_id' => 17],
            ['city' => 'Tacaratu', 'state_id' => 17],
            ['city' => 'Tamandaré', 'state_id' => 17],
            ['city' => 'Taquaritinga do Norte', 'state_id' => 17],
            ['city' => 'Terezinha', 'state_id' => 17],
            ['city' => 'Terra Nova', 'state_id' => 17],
            ['city' => 'Timbaúba', 'state_id' => 17],
            ['city' => 'Toritama', 'state_id' => 17],
            ['city' => 'Tracunhaém', 'state_id' => 17],
            ['city' => 'Trindade', 'state_id' => 17],
            ['city' => 'Triunfo', 'state_id' => 17],
            ['city' => 'Tupanatinga', 'state_id' => 17],
            ['city' => 'Tuparetama', 'state_id' => 17],
            ['city' => 'Venturosa', 'state_id' => 17],
            ['city' => 'Verdejante', 'state_id' => 17],
            ['city' => 'Vertente do Lério', 'state_id' => 17],
            ['city' => 'Vertentes', 'state_id' => 17],
            ['city' => 'Vicência', 'state_id' => 17],
            ['city' => 'Vitória de Santo Antão', 'state_id' => 17],
            ['city' => 'Xexéu', 'state_id' => 17]
        ]);

        $this->command->info('Cidades do Pernambuco importadas com sucesso!');
    }
}