<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CidadesParanaSeeder extends Seeder {

    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        DB::table('cities')->insert([
        	['city' => 'Abatiá', 'state_id' => 16],
            ['city' => 'Adrianópolis', 'state_id' => 16],
            ['city' => 'Agudos do Sul', 'state_id' => 16],
            ['city' => 'Almirante Tamandaré', 'state_id' => 16],
            ['city' => 'Altamira do Paraná', 'state_id' => 16],
            ['city' => 'Alto Paraíso', 'state_id' => 16],
            ['city' => 'Alto Paraná', 'state_id' => 16],
            ['city' => 'Alto Piquiri', 'state_id' => 16],
            ['city' => 'Altônia', 'state_id' => 16],
            ['city' => 'Alvorada do Sul', 'state_id' => 16],
            ['city' => 'Amaporã', 'state_id' => 16],
            ['city' => 'Ampére', 'state_id' => 16],
            ['city' => 'Anahy', 'state_id' => 16],
            ['city' => 'Andirá', 'state_id' => 16],
            ['city' => 'Ângulo', 'state_id' => 16],
            ['city' => 'Antonina', 'state_id' => 16],
            ['city' => 'Antônio Olinto', 'state_id' => 16],
            ['city' => 'Apucarana', 'state_id' => 16],
            ['city' => 'Arapongas', 'state_id' => 16],
            ['city' => 'Arapoti', 'state_id' => 16],
            ['city' => 'Arapuã', 'state_id' => 16],
            ['city' => 'Araruna', 'state_id' => 16],
            ['city' => 'Araucária', 'state_id' => 16],
            ['city' => 'Ariranha do Ivaí', 'state_id' => 16],
            ['city' => 'Assaí', 'state_id' => 16],
            ['city' => 'Assis Chateaubriand', 'state_id' => 16],
            ['city' => 'Astorga', 'state_id' => 16],
            ['city' => 'Atalaia', 'state_id' => 16],
            ['city' => 'Balsa Nova', 'state_id' => 16],
            ['city' => 'Bandeirantes', 'state_id' => 16],
            ['city' => 'Barbosa Ferraz', 'state_id' => 16],
            ['city' => 'Barra do Jacaré', 'state_id' => 16],
            ['city' => 'Barracão', 'state_id' => 16],
            ['city' => 'Bela Vista da Caroba', 'state_id' => 16],
            ['city' => 'Bela Vista do Paraíso', 'state_id' => 16],
            ['city' => 'Bituruna', 'state_id' => 16],
            ['city' => 'Boa Esperança', 'state_id' => 16],
            ['city' => 'Boa Esperança do Iguaçu', 'state_id' => 16],
            ['city' => 'Boa Ventura de São Roque', 'state_id' => 16],
            ['city' => 'Boa Vista da Aparecida', 'state_id' => 16],
            ['city' => 'Bocaiúva do Sul', 'state_id' => 16],
            ['city' => 'Bom Jesus do Sul', 'state_id' => 16],
            ['city' => 'Bom Sucesso', 'state_id' => 16],
            ['city' => 'Bom Sucesso do Sul', 'state_id' => 16],
            ['city' => 'Borrazópolis', 'state_id' => 16],
            ['city' => 'Braganey', 'state_id' => 16],
            ['city' => 'Brasilândia do Sul', 'state_id' => 16],
            ['city' => 'Cafeara', 'state_id' => 16],
            ['city' => 'Cafelândia', 'state_id' => 16],
            ['city' => 'Cafezal do Sul', 'state_id' => 16],
            ['city' => 'Califórnia', 'state_id' => 16],
            ['city' => 'Cambará', 'state_id' => 16],
            ['city' => 'Cambé', 'state_id' => 16],
            ['city' => 'Cambira', 'state_id' => 16],
            ['city' => 'Campina da Lagoa', 'state_id' => 16],
            ['city' => 'Campina do Simão', 'state_id' => 16],
            ['city' => 'Campina Grande do Sul', 'state_id' => 16],
            ['city' => 'Campo Bonito', 'state_id' => 16],
            ['city' => 'Campo do Tenente', 'state_id' => 16],
            ['city' => 'Campo Largo', 'state_id' => 16],
            ['city' => 'Campo Magro', 'state_id' => 16],
            ['city' => 'Campo Mourão', 'state_id' => 16],
            ['city' => 'Cândido de Abreu', 'state_id' => 16],
            ['city' => 'Candói', 'state_id' => 16],
            ['city' => 'Cantagalo', 'state_id' => 16],
            ['city' => 'Capanema', 'state_id' => 16],
            ['city' => 'Capitão Leônidas Marques', 'state_id' => 16],
            ['city' => 'Carambeí', 'state_id' => 16],
            ['city' => 'Carlópolis', 'state_id' => 16],
            ['city' => 'Cascavel', 'state_id' => 16],
            ['city' => 'Castro', 'state_id' => 16],
            ['city' => 'Catanduvas', 'state_id' => 16],
            ['city' => 'Centenário do Sul', 'state_id' => 16],
            ['city' => 'Cerro Azul', 'state_id' => 16],
            ['city' => 'Céu Azul', 'state_id' => 16],
            ['city' => 'Chopinzinho', 'state_id' => 16],
            ['city' => 'Cianorte', 'state_id' => 16],
            ['city' => 'Cidade Gaúcha', 'state_id' => 16],
            ['city' => 'Clevelândia', 'state_id' => 16],
            ['city' => 'Colombo', 'state_id' => 16],
            ['city' => 'Colorado', 'state_id' => 16],
            ['city' => 'Congonhinhas', 'state_id' => 16],
            ['city' => 'Conselheiro Mairinck', 'state_id' => 16],
            ['city' => 'Contenda', 'state_id' => 16],
            ['city' => 'Corbélia', 'state_id' => 16],
            ['city' => 'Cornélio Procópio', 'state_id' => 16],
            ['city' => 'Coronel Domingos Soares', 'state_id' => 16],
            ['city' => 'Coronel Vivida', 'state_id' => 16],
            ['city' => 'Corumbataí do Sul', 'state_id' => 16],
            ['city' => 'Cruz Machado', 'state_id' => 16],
            ['city' => 'Cruzeiro do Iguaçu', 'state_id' => 16],
            ['city' => 'Cruzeiro do Oeste', 'state_id' => 16],
            ['city' => 'Cruzeiro do Sul', 'state_id' => 16],
            ['city' => 'Cruzmaltina', 'state_id' => 16],
            ['city' => 'Curitiba', 'state_id' => 16],
            ['city' => 'Curiúva', 'state_id' => 16],
            ['city' => 'Diamante d`Oeste', 'state_id' => 16],
            ['city' => 'Diamante do Norte', 'state_id' => 16],
            ['city' => 'Diamante do Sul', 'state_id' => 16],
            ['city' => 'Dois Vizinhos', 'state_id' => 16],
            ['city' => 'Douradina', 'state_id' => 16],
            ['city' => 'Doutor Camargo', 'state_id' => 16],
            ['city' => 'Doutor Ulysses', 'state_id' => 16],
            ['city' => 'Enéas Marques', 'state_id' => 16],
            ['city' => 'Engenheiro Beltrão', 'state_id' => 16],
            ['city' => 'Entre Rios do Oeste', 'state_id' => 16],
            ['city' => 'Esperança Nova', 'state_id' => 16],
            ['city' => 'Espigão Alto do Iguaçu', 'state_id' => 16],
            ['city' => 'Farol', 'state_id' => 16],
            ['city' => 'Faxinal', 'state_id' => 16],
            ['city' => 'Fazenda Rio Grande', 'state_id' => 16],
            ['city' => 'Fênix', 'state_id' => 16],
            ['city' => 'Fernandes Pinheiro', 'state_id' => 16],
            ['city' => 'Figueira', 'state_id' => 16],
            ['city' => 'Flor da Serra do Sul', 'state_id' => 16],
            ['city' => 'Floraí', 'state_id' => 16],
            ['city' => 'Floresta', 'state_id' => 16],
            ['city' => 'Florestópolis', 'state_id' => 16],
            ['city' => 'Flórida', 'state_id' => 16],
            ['city' => 'Formosa do Oeste', 'state_id' => 16],
            ['city' => 'Foz do Iguaçu', 'state_id' => 16],
            ['city' => 'Foz do Jordão', 'state_id' => 16],
            ['city' => 'Francisco Alves', 'state_id' => 16],
            ['city' => 'Francisco Beltrão', 'state_id' => 16],
            ['city' => 'General Carneiro', 'state_id' => 16],
            ['city' => 'Godoy Moreira', 'state_id' => 16],
            ['city' => 'Goioerê', 'state_id' => 16],
            ['city' => 'Goioxim', 'state_id' => 16],
            ['city' => 'Grandes Rios', 'state_id' => 16],
            ['city' => 'Guaíra', 'state_id' => 16],
            ['city' => 'Guairaçá', 'state_id' => 16],
            ['city' => 'Guamiranga', 'state_id' => 16],
            ['city' => 'Guapirama', 'state_id' => 16],
            ['city' => 'Guaporema', 'state_id' => 16],
            ['city' => 'Guaraci', 'state_id' => 16],
            ['city' => 'Guaraniaçu', 'state_id' => 16],
            ['city' => 'Guarapuava', 'state_id' => 16],
            ['city' => 'Guaraqueçaba', 'state_id' => 16],
            ['city' => 'Guaratuba', 'state_id' => 16],
            ['city' => 'Honório Serpa', 'state_id' => 16],
            ['city' => 'Ibaiti', 'state_id' => 16],
            ['city' => 'Ibema', 'state_id' => 16],
            ['city' => 'Ibiporã', 'state_id' => 16],
            ['city' => 'Icaraíma', 'state_id' => 16],
            ['city' => 'Iguaraçu', 'state_id' => 16],
            ['city' => 'Iguatu', 'state_id' => 16],
            ['city' => 'Imbaú', 'state_id' => 16],
            ['city' => 'Imbituva', 'state_id' => 16],
            ['city' => 'Inácio Martins', 'state_id' => 16],
            ['city' => 'Inajá', 'state_id' => 16],
            ['city' => 'Indianópolis', 'state_id' => 16],
            ['city' => 'Ipiranga', 'state_id' => 16],
            ['city' => 'Iporã', 'state_id' => 16],
            ['city' => 'Iracema do Oeste', 'state_id' => 16],
            ['city' => 'Irati', 'state_id' => 16],
            ['city' => 'Iretama', 'state_id' => 16],
            ['city' => 'Itaguajé', 'state_id' => 16],
            ['city' => 'Itaipulândia', 'state_id' => 16],
            ['city' => 'Itambaracá', 'state_id' => 16],
            ['city' => 'Itambé', 'state_id' => 16],
            ['city' => 'Itapejara d`Oeste', 'state_id' => 16],
            ['city' => 'Itaperuçu', 'state_id' => 16],
            ['city' => 'Itaúna do Sul', 'state_id' => 16],
            ['city' => 'Ivaí', 'state_id' => 16],
            ['city' => 'Ivaiporã', 'state_id' => 16],
            ['city' => 'Ivaté', 'state_id' => 16],
            ['city' => 'Ivatuba', 'state_id' => 16],
            ['city' => 'Jaboti', 'state_id' => 16],
            ['city' => 'Jacarezinho', 'state_id' => 16],
            ['city' => 'Jaguapitã', 'state_id' => 16],
            ['city' => 'Jaguariaíva', 'state_id' => 16],
            ['city' => 'Jandaia do Sul', 'state_id' => 16],
            ['city' => 'Janiópolis', 'state_id' => 16],
            ['city' => 'Japira', 'state_id' => 16],
            ['city' => 'Japurá', 'state_id' => 16],
            ['city' => 'Jardim Alegre', 'state_id' => 16],
            ['city' => 'Jardim Olinda', 'state_id' => 16],
            ['city' => 'Jataizinho', 'state_id' => 16],
            ['city' => 'Jesuítas', 'state_id' => 16],
            ['city' => 'Joaquim Távora', 'state_id' => 16],
            ['city' => 'Jundiaí do Sul', 'state_id' => 16],
            ['city' => 'Juranda', 'state_id' => 16],
            ['city' => 'Jussara', 'state_id' => 16],
            ['city' => 'Kaloré', 'state_id' => 16],
            ['city' => 'Lapa', 'state_id' => 16],
            ['city' => 'Laranjal', 'state_id' => 16],
            ['city' => 'Laranjeiras do Sul', 'state_id' => 16],
            ['city' => 'Leópolis', 'state_id' => 16],
            ['city' => 'Lidianópolis', 'state_id' => 16],
            ['city' => 'Lindoeste', 'state_id' => 16],
            ['city' => 'Loanda', 'state_id' => 16],
            ['city' => 'Lobato', 'state_id' => 16],
            ['city' => 'Londrina', 'state_id' => 16],
            ['city' => 'Luiziana', 'state_id' => 16],
            ['city' => 'Lunardelli', 'state_id' => 16],
            ['city' => 'Lupionópolis', 'state_id' => 16],
            ['city' => 'Mallet', 'state_id' => 16],
            ['city' => 'Mamborê', 'state_id' => 16],
            ['city' => 'Mandaguaçu', 'state_id' => 16],
            ['city' => 'Mandaguari', 'state_id' => 16],
            ['city' => 'Mandirituba', 'state_id' => 16],
            ['city' => 'Manfrinópolis', 'state_id' => 16],
            ['city' => 'Mangueirinha', 'state_id' => 16],
            ['city' => 'Manoel Ribas', 'state_id' => 16],
            ['city' => 'Marechal Cândido Rondon', 'state_id' => 16],
            ['city' => 'Maria Helena', 'state_id' => 16],
            ['city' => 'Marialva', 'state_id' => 16],
            ['city' => 'Marilândia do Sul', 'state_id' => 16],
            ['city' => 'Marilena', 'state_id' => 16],
            ['city' => 'Mariluz', 'state_id' => 16],
            ['city' => 'Maringá', 'state_id' => 16],
            ['city' => 'Mariópolis', 'state_id' => 16],
            ['city' => 'Maripá', 'state_id' => 16],
            ['city' => 'Marmeleiro', 'state_id' => 16],
            ['city' => 'Marquinho', 'state_id' => 16],
            ['city' => 'Marumbi', 'state_id' => 16],
            ['city' => 'Matelândia', 'state_id' => 16],
            ['city' => 'Matinhos', 'state_id' => 16],
            ['city' => 'Mato Rico', 'state_id' => 16],
            ['city' => 'Mauá da Serra', 'state_id' => 16],
            ['city' => 'Medianeira', 'state_id' => 16],
            ['city' => 'Mercedes', 'state_id' => 16],
            ['city' => 'Mirador', 'state_id' => 16],
            ['city' => 'Miraselva', 'state_id' => 16],
            ['city' => 'Missal', 'state_id' => 16],
            ['city' => 'Moreira Sales', 'state_id' => 16],
            ['city' => 'Morretes', 'state_id' => 16],
            ['city' => 'Munhoz de Melo', 'state_id' => 16],
            ['city' => 'Nossa Senhora das Graças', 'state_id' => 16],
            ['city' => 'Nova Aliança do Ivaí', 'state_id' => 16],
            ['city' => 'Nova América da Colina', 'state_id' => 16],
            ['city' => 'Nova Aurora', 'state_id' => 16],
            ['city' => 'Nova Cantu', 'state_id' => 16],
            ['city' => 'Nova Esperança', 'state_id' => 16],
            ['city' => 'Nova Esperança do Sudoeste', 'state_id' => 16],
            ['city' => 'Nova Fátima', 'state_id' => 16],
            ['city' => 'Nova Laranjeiras', 'state_id' => 16],
            ['city' => 'Nova Londrina', 'state_id' => 16],
            ['city' => 'Nova Olímpia', 'state_id' => 16],
            ['city' => 'Nova Prata do Iguaçu', 'state_id' => 16],
            ['city' => 'Nova Santa Bárbara', 'state_id' => 16],
            ['city' => 'Nova Santa Rosa', 'state_id' => 16],
            ['city' => 'Nova Tebas', 'state_id' => 16],
            ['city' => 'Novo Itacolomi', 'state_id' => 16],
            ['city' => 'Ortigueira', 'state_id' => 16],
            ['city' => 'Ourizona', 'state_id' => 16],
            ['city' => 'Ouro Verde do Oeste', 'state_id' => 16],
            ['city' => 'Paiçandu', 'state_id' => 16],
            ['city' => 'Palmas', 'state_id' => 16],
            ['city' => 'Palmeira', 'state_id' => 16],
            ['city' => 'Palmital', 'state_id' => 16],
            ['city' => 'Palotina', 'state_id' => 16],
            ['city' => 'Paraíso do Norte', 'state_id' => 16],
            ['city' => 'Paranacity', 'state_id' => 16],
            ['city' => 'Paranaguá', 'state_id' => 16],
            ['city' => 'Paranapoema', 'state_id' => 16],
            ['city' => 'Paranavaí', 'state_id' => 16],
            ['city' => 'Pato Bragado', 'state_id' => 16],
            ['city' => 'Pato Branco', 'state_id' => 16],
            ['city' => 'Paula Freitas', 'state_id' => 16],
            ['city' => 'Paulo Frontin', 'state_id' => 16],
            ['city' => 'Peabiru', 'state_id' => 16],
            ['city' => 'Perobal', 'state_id' => 16],
            ['city' => 'Pérola', 'state_id' => 16],
            ['city' => 'Pérola d`Oeste', 'state_id' => 16],
            ['city' => 'Piên', 'state_id' => 16],
            ['city' => 'Pinhais', 'state_id' => 16],
            ['city' => 'Pinhal de São Bento', 'state_id' => 16],
            ['city' => 'Pinhalão', 'state_id' => 16],
            ['city' => 'Pinhão', 'state_id' => 16],
            ['city' => 'Piraí do Sul', 'state_id' => 16],
            ['city' => 'Piraquara', 'state_id' => 16],
            ['city' => 'Pitanga', 'state_id' => 16],
            ['city' => 'Pitangueiras', 'state_id' => 16],
            ['city' => 'Planaltina do Paraná', 'state_id' => 16],
            ['city' => 'Planalto', 'state_id' => 16],
            ['city' => 'Ponta Grossa', 'state_id' => 16],
            ['city' => 'Pontal do Paraná', 'state_id' => 16],
            ['city' => 'Porecatu', 'state_id' => 16],
            ['city' => 'Porto Amazonas', 'state_id' => 16],
            ['city' => 'Porto Barreiro', 'state_id' => 16],
            ['city' => 'Porto Rico', 'state_id' => 16],
            ['city' => 'Porto Vitória', 'state_id' => 16],
            ['city' => 'Prado Ferreira', 'state_id' => 16],
            ['city' => 'Pranchita', 'state_id' => 16],
            ['city' => 'Presidente Castelo Branco', 'state_id' => 16],
            ['city' => 'Primeiro de Maio', 'state_id' => 16],
            ['city' => 'Prudentópolis', 'state_id' => 16],
            ['city' => 'Quarto Centenário', 'state_id' => 16],
            ['city' => 'Quatiguá', 'state_id' => 16],
            ['city' => 'Quatro Barras', 'state_id' => 16],
            ['city' => 'Quatro Pontes', 'state_id' => 16],
            ['city' => 'Quedas do Iguaçu', 'state_id' => 16],
            ['city' => 'Querência do Norte', 'state_id' => 16],
            ['city' => 'Quinta do Sol', 'state_id' => 16],
            ['city' => 'Quitandinha', 'state_id' => 16],
            ['city' => 'Ramilândia', 'state_id' => 16],
            ['city' => 'Rancho Alegre', 'state_id' => 16],
            ['city' => 'Rancho Alegre d`Oeste', 'state_id' => 16],
            ['city' => 'Realeza', 'state_id' => 16],
            ['city' => 'Rebouças', 'state_id' => 16],
            ['city' => 'Renascença', 'state_id' => 16],
            ['city' => 'Reserva', 'state_id' => 16],
            ['city' => 'Reserva do Iguaçu', 'state_id' => 16],
            ['city' => 'Ribeirão Claro', 'state_id' => 16],
            ['city' => 'Ribeirão do Pinhal', 'state_id' => 16],
            ['city' => 'Rio Azul', 'state_id' => 16],
            ['city' => 'Rio Bom', 'state_id' => 16],
            ['city' => 'Rio Bonito do Iguaçu', 'state_id' => 16],
            ['city' => 'Rio Branco do Ivaí', 'state_id' => 16],
            ['city' => 'Rio Branco do Sul', 'state_id' => 16],
            ['city' => 'Rio Negro', 'state_id' => 16],
            ['city' => 'Rolândia', 'state_id' => 16],
            ['city' => 'Roncador', 'state_id' => 16],
            ['city' => 'Rondon', 'state_id' => 16],
            ['city' => 'Rosário do Ivaí', 'state_id' => 16],
            ['city' => 'Sabáudia', 'state_id' => 16],
            ['city' => 'Salgado Filho', 'state_id' => 16],
            ['city' => 'Salto do Itararé', 'state_id' => 16],
            ['city' => 'Salto do Lontra', 'state_id' => 16],
            ['city' => 'Santa Amélia', 'state_id' => 16],
            ['city' => 'Santa Cecília do Pavão', 'state_id' => 16],
            ['city' => 'Santa Cruz de Monte Castelo', 'state_id' => 16],
            ['city' => 'Santa Fé', 'state_id' => 16],
            ['city' => 'Santa Helena', 'state_id' => 16],
            ['city' => 'Santa Inês', 'state_id' => 16],
            ['city' => 'Santa Isabel do Ivaí', 'state_id' => 16],
            ['city' => 'Santa Izabel do Oeste', 'state_id' => 16],
            ['city' => 'Santa Lúcia', 'state_id' => 16],
            ['city' => 'Santa Maria do Oeste', 'state_id' => 16],
            ['city' => 'Santa Mariana', 'state_id' => 16],
            ['city' => 'Santa Mônica', 'state_id' => 16],
            ['city' => 'Santa Tereza do Oeste', 'state_id' => 16],
            ['city' => 'Santa Terezinha de Itaipu', 'state_id' => 16],
            ['city' => 'Santana do Itararé', 'state_id' => 16],
            ['city' => 'Santo Antônio da Platina', 'state_id' => 16],
            ['city' => 'Santo Antônio do Caiuá', 'state_id' => 16],
            ['city' => 'Santo Antônio do Paraíso', 'state_id' => 16],
            ['city' => 'Santo Antônio do Sudoeste', 'state_id' => 16],
            ['city' => 'Santo Inácio', 'state_id' => 16],
            ['city' => 'São Carlos do Ivaí', 'state_id' => 16],
            ['city' => 'São Jerônimo da Serra', 'state_id' => 16],
            ['city' => 'São João', 'state_id' => 16],
            ['city' => 'São João do Caiuá', 'state_id' => 16],
            ['city' => 'São João do Ivaí', 'state_id' => 16],
            ['city' => 'São João do Triunfo', 'state_id' => 16],
            ['city' => 'São Jorge d`Oeste', 'state_id' => 16],
            ['city' => 'São Jorge do Ivaí', 'state_id' => 16],
            ['city' => 'São Jorge do Patrocínio', 'state_id' => 16],
            ['city' => 'São José da Boa Vista', 'state_id' => 16],
            ['city' => 'São José das Palmeiras', 'state_id' => 16],
            ['city' => 'São José dos Pinhais', 'state_id' => 16],
            ['city' => 'São Manoel do Paraná', 'state_id' => 16],
            ['city' => 'São Mateus do Sul', 'state_id' => 16],
            ['city' => 'São Miguel do Iguaçu', 'state_id' => 16],
            ['city' => 'São Pedro do Iguaçu', 'state_id' => 16],
            ['city' => 'São Pedro do Ivaí', 'state_id' => 16],
            ['city' => 'São Pedro do Paraná', 'state_id' => 16],
            ['city' => 'São Sebastião da Amoreira', 'state_id' => 16],
            ['city' => 'São Tomé', 'state_id' => 16],
            ['city' => 'Sapopema', 'state_id' => 16],
            ['city' => 'Sarandi', 'state_id' => 16],
            ['city' => 'Saudade do Iguaçu', 'state_id' => 16],
            ['city' => 'Sengés', 'state_id' => 16],
            ['city' => 'Serranópolis do Iguaçu', 'state_id' => 16],
            ['city' => 'Sertaneja', 'state_id' => 16],
            ['city' => 'Sertanópolis', 'state_id' => 16],
            ['city' => 'Siqueira Campos', 'state_id' => 16],
            ['city' => 'Sulina', 'state_id' => 16],
            ['city' => 'Tamarana', 'state_id' => 16],
            ['city' => 'Tamboara', 'state_id' => 16],
            ['city' => 'Tapejara', 'state_id' => 16],
            ['city' => 'Tapira', 'state_id' => 16],
            ['city' => 'Teixeira Soares', 'state_id' => 16],
            ['city' => 'Telêmaco Borba', 'state_id' => 16],
            ['city' => 'Terra Boa', 'state_id' => 16],
            ['city' => 'Terra Rica', 'state_id' => 16],
            ['city' => 'Terra Roxa', 'state_id' => 16],
            ['city' => 'Tibagi', 'state_id' => 16],
            ['city' => 'Tijucas do Sul', 'state_id' => 16],
            ['city' => 'Toledo', 'state_id' => 16],
            ['city' => 'Tomazina', 'state_id' => 16],
            ['city' => 'Três Barras do Paraná', 'state_id' => 16],
            ['city' => 'Tunas do Paraná', 'state_id' => 16],
            ['city' => 'Tuneiras do Oeste', 'state_id' => 16],
            ['city' => 'Tupãssi', 'state_id' => 16],
            ['city' => 'Turvo', 'state_id' => 16],
            ['city' => 'Ubiratã', 'state_id' => 16],
            ['city' => 'Umuarama', 'state_id' => 16],
            ['city' => 'União da Vitória', 'state_id' => 16],
            ['city' => 'Uniflor', 'state_id' => 16],
            ['city' => 'Uraí', 'state_id' => 16],
            ['city' => 'Ventania', 'state_id' => 16],
            ['city' => 'Vera Cruz do Oeste', 'state_id' => 16],
            ['city' => 'Verê', 'state_id' => 16],
            ['city' => 'Virmond', 'state_id' => 16],
            ['city' => 'Vitorino', 'state_id' => 16],
            ['city' => 'Wenceslau Braz', 'state_id' => 16],
            ['city' => 'Xambrê', 'state_id' => 16]
        ]);

        $this->command->info('Cidades do Paraná importadas com sucesso!');
    }
}