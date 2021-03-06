<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CidadesPiauiSeeder extends Seeder {

    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        DB::table('cities')->insert([
        	['city' => 'Acauã', 'state_id' => 18],
            ['city' => 'Agricolândia', 'state_id' => 18],
            ['city' => 'Água Branca', 'state_id' => 18],
            ['city' => 'Alagoinha do Piauí', 'state_id' => 18],
            ['city' => 'Alegrete do Piauí', 'state_id' => 18],
            ['city' => 'Alto Longá', 'state_id' => 18],
            ['city' => 'Altos', 'state_id' => 18],
            ['city' => 'Alvorada do Gurguéia', 'state_id' => 18],
            ['city' => 'Amarante', 'state_id' => 18],
            ['city' => 'Angical do Piauí', 'state_id' => 18],
            ['city' => 'Anísio de Abreu', 'state_id' => 18],
            ['city' => 'Antônio Almeida', 'state_id' => 18],
            ['city' => 'Aroazes', 'state_id' => 18],
            ['city' => 'Aroeiras do Itaim', 'state_id' => 18],
            ['city' => 'Arraial', 'state_id' => 18],
            ['city' => 'Assunção do Piauí', 'state_id' => 18],
            ['city' => 'Avelino Lopes', 'state_id' => 18],
            ['city' => 'Baixa Grande do Ribeiro', 'state_id' => 18],
            ['city' => 'Barra d`Alcântara', 'state_id' => 18],
            ['city' => 'Barras', 'state_id' => 18],
            ['city' => 'Barreiras do Piauí', 'state_id' => 18],
            ['city' => 'Barro Duro', 'state_id' => 18],
            ['city' => 'Batalha', 'state_id' => 18],
            ['city' => 'Bela Vista do Piauí', 'state_id' => 18],
            ['city' => 'Belém do Piauí', 'state_id' => 18],
            ['city' => 'Beneditinos', 'state_id' => 18],
            ['city' => 'Bertolínia', 'state_id' => 18],
            ['city' => 'Betânia do Piauí', 'state_id' => 18],
            ['city' => 'Boa Hora', 'state_id' => 18],
            ['city' => 'Bocaina', 'state_id' => 18],
            ['city' => 'Bom Jesus', 'state_id' => 18],
            ['city' => 'Bom Princípio do Piauí', 'state_id' => 18],
            ['city' => 'Bonfim do Piauí', 'state_id' => 18],
            ['city' => 'Boqueirão do Piauí', 'state_id' => 18],
            ['city' => 'Brasileira', 'state_id' => 18],
            ['city' => 'Brejo do Piauí', 'state_id' => 18],
            ['city' => 'Buriti dos Lopes', 'state_id' => 18],
            ['city' => 'Buriti dos Montes', 'state_id' => 18],
            ['city' => 'Cabeceiras do Piauí', 'state_id' => 18],
            ['city' => 'Cajazeiras do Piauí', 'state_id' => 18],
            ['city' => 'Cajueiro da Praia', 'state_id' => 18],
            ['city' => 'Caldeirão Grande do Piauí', 'state_id' => 18],
            ['city' => 'Campinas do Piauí', 'state_id' => 18],
            ['city' => 'Campo Alegre do Fidalgo', 'state_id' => 18],
            ['city' => 'Campo Grande do Piauí', 'state_id' => 18],
            ['city' => 'Campo Largo do Piauí', 'state_id' => 18],
            ['city' => 'Campo Maior', 'state_id' => 18],
            ['city' => 'Canavieira', 'state_id' => 18],
            ['city' => 'Canto do Buriti', 'state_id' => 18],
            ['city' => 'Capitão de Campos', 'state_id' => 18],
            ['city' => 'Capitão Gervásio Oliveira', 'state_id' => 18],
            ['city' => 'Caracol', 'state_id' => 18],
            ['city' => 'Caraúbas do Piauí', 'state_id' => 18],
            ['city' => 'Caridade do Piauí', 'state_id' => 18],
            ['city' => 'Castelo do Piauí', 'state_id' => 18],
            ['city' => 'Caxingó', 'state_id' => 18],
            ['city' => 'Cocal', 'state_id' => 18],
            ['city' => 'Cocal de Telha', 'state_id' => 18],
            ['city' => 'Cocal dos Alves', 'state_id' => 18],
            ['city' => 'Coivaras', 'state_id' => 18],
            ['city' => 'Colônia do Gurguéia', 'state_id' => 18],
            ['city' => 'Colônia do Piauí', 'state_id' => 18],
            ['city' => 'Conceição do Canindé', 'state_id' => 18],
            ['city' => 'Coronel José Dias', 'state_id' => 18],
            ['city' => 'Corrente', 'state_id' => 18],
            ['city' => 'Cristalândia do Piauí', 'state_id' => 18],
            ['city' => 'Cristino Castro', 'state_id' => 18],
            ['city' => 'Curimatá', 'state_id' => 18],
            ['city' => 'Currais', 'state_id' => 18],
            ['city' => 'Curral Novo do Piauí', 'state_id' => 18],
            ['city' => 'Curralinhos', 'state_id' => 18],
            ['city' => 'Demerval Lobão', 'state_id' => 18],
            ['city' => 'Dirceu Arcoverde', 'state_id' => 18],
            ['city' => 'Dom Expedito Lopes', 'state_id' => 18],
            ['city' => 'Dom Inocêncio', 'state_id' => 18],
            ['city' => 'Domingos Mourão', 'state_id' => 18],
            ['city' => 'Elesbão Veloso', 'state_id' => 18],
            ['city' => 'Eliseu Martins', 'state_id' => 18],
            ['city' => 'Esperantina', 'state_id' => 18],
            ['city' => 'Fartura do Piauí', 'state_id' => 18],
            ['city' => 'Flores do Piauí', 'state_id' => 18],
            ['city' => 'Floresta do Piauí', 'state_id' => 18],
            ['city' => 'Floriano', 'state_id' => 18],
            ['city' => 'Francinópolis', 'state_id' => 18],
            ['city' => 'Francisco Ayres', 'state_id' => 18],
            ['city' => 'Francisco Macedo', 'state_id' => 18],
            ['city' => 'Francisco Santos', 'state_id' => 18],
            ['city' => 'Fronteiras', 'state_id' => 18],
            ['city' => 'Geminiano', 'state_id' => 18],
            ['city' => 'Gilbués', 'state_id' => 18],
            ['city' => 'Guadalupe', 'state_id' => 18],
            ['city' => 'Guaribas', 'state_id' => 18],
            ['city' => 'Hugo Napoleão', 'state_id' => 18],
            ['city' => 'Ilha Grande', 'state_id' => 18],
            ['city' => 'Inhuma', 'state_id' => 18],
            ['city' => 'Ipiranga do Piauí', 'state_id' => 18],
            ['city' => 'Isaías Coelho', 'state_id' => 18],
            ['city' => 'Itainópolis', 'state_id' => 18],
            ['city' => 'Itaueira', 'state_id' => 18],
            ['city' => 'Jacobina do Piauí', 'state_id' => 18],
            ['city' => 'Jaicós', 'state_id' => 18],
            ['city' => 'Jardim do Mulato', 'state_id' => 18],
            ['city' => 'Jatobá do Piauí', 'state_id' => 18],
            ['city' => 'Jerumenha', 'state_id' => 18],
            ['city' => 'João Costa', 'state_id' => 18],
            ['city' => 'Joaquim Pires', 'state_id' => 18],
            ['city' => 'Joca Marques', 'state_id' => 18],
            ['city' => 'José de Freitas', 'state_id' => 18],
            ['city' => 'Juazeiro do Piauí', 'state_id' => 18],
            ['city' => 'Júlio Borges', 'state_id' => 18],
            ['city' => 'Jurema', 'state_id' => 18],
            ['city' => 'Lagoa Alegre', 'state_id' => 18],
            ['city' => 'Lagoa de São Francisco', 'state_id' => 18],
            ['city' => 'Lagoa do Barro do Piauí', 'state_id' => 18],
            ['city' => 'Lagoa do Piauí', 'state_id' => 18],
            ['city' => 'Lagoa do Sítio', 'state_id' => 18],
            ['city' => 'Lagoinha do Piauí', 'state_id' => 18],
            ['city' => 'Landri Sales', 'state_id' => 18],
            ['city' => 'Luís Correia', 'state_id' => 18],
            ['city' => 'Luzilândia', 'state_id' => 18],
            ['city' => 'Madeiro', 'state_id' => 18],
            ['city' => 'Manoel Emídio', 'state_id' => 18],
            ['city' => 'Marcolândia', 'state_id' => 18],
            ['city' => 'Marcos Parente', 'state_id' => 18],
            ['city' => 'Massapê do Piauí', 'state_id' => 18],
            ['city' => 'Matias Olímpio', 'state_id' => 18],
            ['city' => 'Miguel Alves', 'state_id' => 18],
            ['city' => 'Miguel Leão', 'state_id' => 18],
            ['city' => 'Milton Brandão', 'state_id' => 18],
            ['city' => 'Monsenhor Gil', 'state_id' => 18],
            ['city' => 'Monsenhor Hipólito', 'state_id' => 18],
            ['city' => 'Monte Alegre do Piauí', 'state_id' => 18],
            ['city' => 'Morro Cabeça no Tempo', 'state_id' => 18],
            ['city' => 'Morro do Chapéu do Piauí', 'state_id' => 18],
            ['city' => 'Murici dos Portelas', 'state_id' => 18],
            ['city' => 'Nazaré do Piauí', 'state_id' => 18],
            ['city' => 'Nossa Senhora de Nazaré', 'state_id' => 18],
            ['city' => 'Nossa Senhora dos Remédios', 'state_id' => 18],
            ['city' => 'Nova Santa Rita', 'state_id' => 18],
            ['city' => 'Novo Oriente do Piauí', 'state_id' => 18],
            ['city' => 'Novo Santo Antônio', 'state_id' => 18],
            ['city' => 'Oeiras', 'state_id' => 18],
            ['city' => 'Olho d`Água do Piauí', 'state_id' => 18],
            ['city' => 'Padre Marcos', 'state_id' => 18],
            ['city' => 'Paes Landim', 'state_id' => 18],
            ['city' => 'Pajeú do Piauí', 'state_id' => 18],
            ['city' => 'Palmeira do Piauí', 'state_id' => 18],
            ['city' => 'Palmeirais', 'state_id' => 18],
            ['city' => 'Paquetá', 'state_id' => 18],
            ['city' => 'Parnaguá', 'state_id' => 18],
            ['city' => 'Parnaíba', 'state_id' => 18],
            ['city' => 'Passagem Franca do Piauí', 'state_id' => 18],
            ['city' => 'Patos do Piauí', 'state_id' => 18],
            ['city' => 'Pau d`Arco do Piauí', 'state_id' => 18],
            ['city' => 'Paulistana', 'state_id' => 18],
            ['city' => 'Pavussu', 'state_id' => 18],
            ['city' => 'Pedro II', 'state_id' => 18],
            ['city' => 'Pedro Laurentino', 'state_id' => 18],
            ['city' => 'Picos', 'state_id' => 18],
            ['city' => 'Pimenteiras', 'state_id' => 18],
            ['city' => 'Pio IX', 'state_id' => 18],
            ['city' => 'Piracuruca', 'state_id' => 18],
            ['city' => 'Piripiri', 'state_id' => 18],
            ['city' => 'Porto', 'state_id' => 18],
            ['city' => 'Porto Alegre do Piauí', 'state_id' => 18],
            ['city' => 'Prata do Piauí', 'state_id' => 18],
            ['city' => 'Queimada Nova', 'state_id' => 18],
            ['city' => 'Redenção do Gurguéia', 'state_id' => 18],
            ['city' => 'Regeneração', 'state_id' => 18],
            ['city' => 'Riacho Frio', 'state_id' => 18],
            ['city' => 'Ribeira do Piauí', 'state_id' => 18],
            ['city' => 'Ribeiro Gonçalves', 'state_id' => 18],
            ['city' => 'Rio Grande do Piauí', 'state_id' => 18],
            ['city' => 'Santa Cruz do Piauí', 'state_id' => 18],
            ['city' => 'Santa Cruz dos Milagres', 'state_id' => 18],
            ['city' => 'Santa Filomena', 'state_id' => 18],
            ['city' => 'Santa Luz', 'state_id' => 18],
            ['city' => 'Santa Rosa do Piauí', 'state_id' => 18],
            ['city' => 'Santana do Piauí', 'state_id' => 18],
            ['city' => 'Santo Antônio de Lisboa', 'state_id' => 18],
            ['city' => 'Santo Antônio dos Milagres', 'state_id' => 18],
            ['city' => 'Santo Inácio do Piauí', 'state_id' => 18],
            ['city' => 'São Braz do Piauí', 'state_id' => 18],
            ['city' => 'São Félix do Piauí', 'state_id' => 18],
            ['city' => 'São Francisco de Assis do Piauí', 'state_id' => 18],
            ['city' => 'São Francisco do Piauí', 'state_id' => 18],
            ['city' => 'São Gonçalo do Gurguéia', 'state_id' => 18],
            ['city' => 'São Gonçalo do Piauí', 'state_id' => 18],
            ['city' => 'São João da Canabrava', 'state_id' => 18],
            ['city' => 'São João da Fronteira', 'state_id' => 18],
            ['city' => 'São João da Serra', 'state_id' => 18],
            ['city' => 'São João da Varjota', 'state_id' => 18],
            ['city' => 'São João do Arraial', 'state_id' => 18],
            ['city' => 'São João do Piauí', 'state_id' => 18],
            ['city' => 'São José do Divino', 'state_id' => 18],
            ['city' => 'São José do Peixe', 'state_id' => 18],
            ['city' => 'São José do Piauí', 'state_id' => 18],
            ['city' => 'São Julião', 'state_id' => 18],
            ['city' => 'São Lourenço do Piauí', 'state_id' => 18],
            ['city' => 'São Luis do Piauí', 'state_id' => 18],
            ['city' => 'São Miguel da Baixa Grande', 'state_id' => 18],
            ['city' => 'São Miguel do Fidalgo', 'state_id' => 18],
            ['city' => 'São Miguel do Tapuio', 'state_id' => 18],
            ['city' => 'São Pedro do Piauí', 'state_id' => 18],
            ['city' => 'São Raimundo Nonato', 'state_id' => 18],
            ['city' => 'Sebastião Barros', 'state_id' => 18],
            ['city' => 'Sebastião Leal', 'state_id' => 18],
            ['city' => 'Sigefredo Pacheco', 'state_id' => 18],
            ['city' => 'Simões', 'state_id' => 18],
            ['city' => 'Simplício Mendes', 'state_id' => 18],
            ['city' => 'Socorro do Piauí', 'state_id' => 18],
            ['city' => 'Sussuapara', 'state_id' => 18],
            ['city' => 'Tamboril do Piauí', 'state_id' => 18],
            ['city' => 'Tanque do Piauí', 'state_id' => 18],
            ['city' => 'Teresina', 'state_id' => 18],
            ['city' => 'União', 'state_id' => 18],
            ['city' => 'Uruçuí', 'state_id' => 18],
            ['city' => 'Valença do Piauí', 'state_id' => 18],
            ['city' => 'Várzea Branca', 'state_id' => 18],
            ['city' => 'Várzea Grande', 'state_id' => 18],
            ['city' => 'Vera Mendes', 'state_id' => 18],
            ['city' => 'Vila Nova do Piauí', 'state_id' => 18],
            ['city' => 'Wall Ferraz', 'state_id' => 18]
        ]);

        $this->command->info('Cidades do Piauí importadas com sucesso!');
    }
}