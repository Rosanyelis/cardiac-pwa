<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PlantillaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Plantilla::create([
            'nombre' => 'Signos positivos',
            'texto' => '<p><span style="font-family: Inter, Roboto, sans-serif; font-size: 13.5px; letter-spacing: normal;">BsCsGs. Eupneico. Tolera el decúbito dorsal. PVY no ingurgitado. Tórax: normoexpansible MV AsHsTs s/a. Apex en 5to EICI con LMCI. RsCsRs sin soplos ni RsBsTs. Abdomen blando depresible, sin hepatomegalia. Pulsos arteriales de adecuada amplitud. No hay edema en MsIs. Neurológico preservado.&nbsp;</span><br></p>'
        ]);
        \App\Models\Plantilla::create([
            'nombre' => 'Acompañante',
            'texto' => '<p><span style="font-family: Inter, Roboto, sans-serif; font-size: 13.5px; letter-spacing: normal;">Por medio de la presente se hace constar que el/la Ciudadano/a&nbsp;</span><u style="box-sizing: inherit; -webkit-tap-highlight-color: transparent; font-family: Inter, Roboto, sans-serif; font-size: 13.5px; letter-spacing: normal;"></u><span style="font-family: Inter, Roboto, sans-serif; font-size: 13.5px; letter-spacing: normal;">acudió el día de hoy&nbsp;</span><u style="box-sizing: inherit; -webkit-tap-highlight-color: transparent; font-family: Inter, Roboto, sans-serif; font-size: 13.5px; letter-spacing: normal;"></u><span style="font-family: Inter, Roboto, sans-serif; font-size: 13.5px; letter-spacing: normal;">a esta institución, acompañando a su familiar&nbsp;</span><u style="box-sizing: inherit; -webkit-tap-highlight-color: transparent; font-family: Inter, Roboto, sans-serif; font-size: 13.5px; letter-spacing: normal;"></u><span style="font-family: Inter, Roboto, sans-serif; font-size: 13.5px; letter-spacing: normal;">quien es paciente regular de mi consulta.</span><br></p>'
        ]);
        \App\Models\Plantilla::create([
            'nombre' => 'RX Torax PA',
            'texto' => '<p><span style="font-family: Inter, Roboto, sans-serif; font-size: 13.5px; letter-spacing: normal;">Silueta cardíaca de forma y volumen normal, ICT</span><br></p>'
        ]);
        \App\Models\Plantilla::create([
            'nombre' => 'Hospitalización',
            'texto' => '<p><span style="font-family: Inter, Roboto, sans-serif; font-size: 13.5px; letter-spacing: normal;">Se hace constar por medio de la presente, que el paciente arriba identificado, estuvo hospitalizado en esta institución, desde el día&nbsp;</span><u style="box-sizing: inherit; -webkit-tap-highlight-color: transparent; font-family: Inter, Roboto, sans-serif; font-size: 13.5px; letter-spacing: normal;"></u><span style="font-family: Inter, Roboto, sans-serif; font-size: 13.5px; letter-spacing: normal;">, hasta el día</span><span style="font-family: Inter, Roboto, sans-serif; font-size: 13.5px; letter-spacing: normal;">&nbsp;por los siguiente diagnósticos:</span><br></p>'
        ]);
        \App\Models\Plantilla::create([
            'nombre' => 'Reposo médico',
            'texto' => '<p><span style="font-family: Inter, Roboto, sans-serif; font-size: 13.5px; letter-spacing: normal;">Por medio de la presente se certifica que el/la paciente arriba identificada/o acudió el día de hoy&nbsp;</span><u style="box-sizing: inherit; -webkit-tap-highlight-color: transparent; font-family: Inter, Roboto, sans-serif; font-size: 13.5px; letter-spacing: normal;"></u><span style="font-family: Inter, Roboto, sans-serif; font-size: 13.5px; letter-spacing: normal;">a esta consulta y amerita reposo médico por&nbsp;</span><u style="box-sizing: inherit; -webkit-tap-highlight-color: transparent; font-family: Inter, Roboto, sans-serif; font-size: 13.5px; letter-spacing: normal;"></u><span style="font-family: Inter, Roboto, sans-serif; font-size: 13.5px; letter-spacing: normal;">() días, a partir de la fecha.</span><br></p>'
        ]);
        \App\Models\Plantilla::create([
            'nombre' => 'Ecocardiograma',
            'texto' => '<p><span style="font-family: Inter, Roboto, sans-serif; font-size: 13.5px; letter-spacing: normal;">ECOCARDIOGRAMA TRANSTORACICO: 1.- Hipertrofia concéntrica del ventrículo izquierdo.&nbsp; 2.- Volúmenes, función diastólica y fracción de eyección del ventrículo izquierdo preservados (VDFVI=cc&nbsp; &nbsp;VSFVI=cc&nbsp; &nbsp;FEVI= %). 3.- Volúmenes, función diastólica y sistólica ventricular derecha preservada. 4.- VÁLVULAS: normales. Regurgitación Valvular Tricuspídea leve que deja un Gmax entre el VD-AD de mmhg, permitiendo estimar la presión sistólica en el TAP en mmhg.&nbsp; 5.- MOTILIDAD: no se observó trastornos de la motilidad global ni segmentaria.&nbsp; &nbsp;6.- GRANDES VASOS: normales.&nbsp; 7.- PERICARDIO: Normoreflectante. No se observó derrame pericárdico.</span><br></p>'
        ]);
    }
}
