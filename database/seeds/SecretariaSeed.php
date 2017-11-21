<?php
Use App\Secretaria;
use Illuminate\Database\Seeder;

class SecretariaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        secretaria::insert(['nome'=>'Secretaria Municipal de Administração', 'sigla'=>'SEMAD']);
        secretaria::insert(['nome'=>'Secretaria Municipal de Governo', 'sigla'=>'SEGOV']);
        secretaria::insert(['nome'=>'Secretaria Municipal de Educação', 'sigla'=>'SEMED']);
        secretaria::insert(['nome'=>'Secretaria Municipal de Assistência Social', 'sigla'=>'SAS']);
        secretaria::insert(['nome'=>'Secretaria Municipal de Saúde e Saneamento', 'sigla'=>'SESAU']);
        secretaria::insert(['nome'=>'Secretaria Municipal de Produção e Meio Ambiente', 'sigla'=>'SEPROMA']);
        secretaria::insert(['nome'=>'Secretaria Municipal de Planejamento e Urbanismo', 'sigla'=>'SEPLAN']);
        secretaria::insert(['nome'=>'Secretaria Municipal de Finanças', 'sigla'=>'SEFIN']);
        secretaria::insert(['nome'=>'Secretaria Municipal de Obras e Serviços Urbanos', 'sigla'=>'SEMOSU']);

    }
}
