<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SayangController extends Controller
{
    public function index()
    {
        $quotes = [
            "Semangat sayang! Kamu pasti bisa ngejawab semua soal mid term-nya 💪",
            "Jangan lupa istirahat ya, otak butuh recharge biar makin fokus 🧠✨",
            "Aku percaya sama kemampuanmu. Tunjukkan yang terbaik! ❤️",
            "Mid term cuma ujian biasa, kamu sudah hebat sejauh ini 🎉",
            "Ingat, apapun hasilnya, aku tetap bangga sama kamu 🥰",
            "Belajar yang rajin, tapi jangan lupa makan dan minum ya sayang 🍚🥤",
            "You got this! I'm always here cheering for you 🗣️📣",
            "Satu soal demi satu soal, pasti kelar kok. Semangat! 💯"
        ];
        
        return view('sayang', compact('quotes'));
    }
}