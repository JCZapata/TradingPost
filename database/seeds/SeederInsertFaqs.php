<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeederInsertFaqs extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      if (!DB::table('faqs')->exists()) {
        DB::table('faqs')->insert([
                "pregunta" => "¿Que productos no se pueden vender en el sitio?",
                "respuesta" => "Ante todo, no permitimos lo que las leyes no permiten.
                Si tenés dudas sobre algún producto, antes que nada averiguá si es legal venderlo. Básicamente, si la ley no lo permite, nosotros tampoco. Por ejemplo: drogas, medicamentos recetados, animales en peligro de extinción y varios otros.
                Publicar productos prohibidos es una infracción a nuestras políticas.
                Es muy importante que estés seguro antes de publicar porque, además de dar de baja las publicaciones que no cumplan con nuestras políticas, cada infracción queda registrada en un historial y podríamos suspender tu cuenta.",
        ]);
        DB::table('faqs')->insert([
                "pregunta" => "¿Cómo pagar tu compra?",
                "respuesta" => "Elegí entre cualquiera de estos medios de pago: Tarjeta de credito( Hasta 12 cuotas sin interés) - Tarjeta de debito (1 pago) - En efectivo con Rapipago, Pago Fácil (1 pago) - Trade by pay",
        ]);
        DB::table('faqs')->insert([
                "pregunta" => "¿Como funciona el Trade by pay?",
                "respuesta" => "Trade by pay es un nuevo metodo de pago bastante simple que consiste en el intercambio de productos que se estan vendiendo como forma de pago, como una especie de canje. Los usuarios pueden optar por intercambiar los productos entre si e incluso combinarlo con otras formas de pago (siempre y cuando ambas partes esten de acuerdo con el intercambio).",
        ]);
        DB::table('faqs')->insert([
                "pregunta" => "¿Como protegemos a los vendedores?",
                "respuesta" => "Si surge algún problema con una compra, es posible que alguien te haga un reclamo. No te preocupes, la mayoría de las veces se trata de simples malentendidos que se resuelven rapidísimo. Te avisamos apenas recibís el reclamo y te decimos cómo seguir. Si es necesario, podemos mediar para ayudarte a llegar a una solución.",
        ]);
        DB::table('faqs')->insert([
                "pregunta" => "¿Que sucede si el comprador desconoce el pago?",
                "respuesta" => "Si bien no es común, es posible que algún comprador desconozca el pago que hizo con su tarjeta de crédito. A ese desconocimiento lo llamamos “contracargo” y puede pasar porque alguien utilizó la tarjeta de crédito del comprador sin autorización o el comprador considera que no cumpliste con lo acordado. No te preocupes. Para que puedas conservar el dinero de tu venta, creamos el Programa de Protección al Vendedor. Si recibís un contracargo, te contactamos, te pedimos que compruebes la entrega del producto y luego veremos cada caso individualmente.",
        ]);
        DB::table('faqs')->insert([
                "pregunta" => "¿Como protegemos a los compradores?",
                "respuesta" => "Cuando pagás, el vendedor puede ver el dinero en su cuenta, pero tiene que esperar para poder usarlo. Lo hicimos así para que tengas tiempo de recibir el producto y evaluarlo. Además, podés elegir que te entreguen el producto a través de Sending by trade y tu dinero va a estar protegido hasta 10 días después de que el correo nos avise que te llegó el producto.",
        ]);
        DB::table('faqs')->insert([
                "pregunta" => "¿Que hacer si ocurre un inconveniente con la compra?",
                "respuesta" => "Aunque no es común, si tuvieras algún problema con la compra, estaremos ahí para ayudarte. Lo primero que tenés que hacer es iniciar un reclamo a tu vendedor. Es importante que lo hagas lo antes posible y nos cuentes en detalle qué pasó, para que podamos seguir tu problema y ayudarte a resolverlo. Si pagás por cualquier metodo electronico y llegaras a tener un problema, te devolvemos el 100% del dinero porque tu compra está siempre protegida.",
        ]);
        DB::table('faqs')->insert([
                "pregunta" => "¿Como contactarnos?",
                "respuesta" => "Cualquier duda o inconveniente en particular con gusto sera atendido por nuestro sector de Servicios al Cliente. Tel: (+5411) 4563-275-6405 - Mail: Serviciosalcliente@the-trading-post.com.ar",
        ]);
    }
  }
}
