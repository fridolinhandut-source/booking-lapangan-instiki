@extends('layout')
@section('content')
<style>
.page{padding:30px;}
.title{font-size:40px;font-weight:bold;margin-bottom:20px;}
.cal-header{display:flex;justify-content:space-between;align-items:center;margin-bottom:20px;}
.cal-header h2{font-size:24px;font-weight:bold;}
.cal-nav{background:#ff7300;color:white;border:none;padding:8px 16px;border-radius:10px;cursor:pointer;font-size:18px;}
.calendar{background:white;border-radius:20px;padding:24px;box-shadow:0 4px 12px rgba(0,0,0,0.08);}
.cal-grid{display:grid;grid-template-columns:repeat(7,1fr);gap:8px;text-align:center;}
.cal-day-name{font-weight:bold;color:#888;padding:8px;font-size:13px;}
.cal-day{padding:10px;border-radius:10px;cursor:pointer;font-size:14px;}
.cal-day:hover{background:#fff3e0;}
.cal-day.today{background:#ff7300;color:white;font-weight:bold;}
.cal-day.has-booking{background:#e8f5e9;color:#2e7d32;font-weight:bold;}
.cal-day.empty{color:transparent;}
.events{margin-top:24px;}
.event-card{background:#fff3e0;border-left:4px solid #ff7300;border-radius:10px;padding:16px;margin-bottom:12px;}
.event-card h4{font-size:16px;font-weight:bold;}
.event-card p{color:#888;font-size:13px;margin-top:4px;}
</style>
<div class="page">
    <div class="title">Kalender</div>
    <div class="calendar">
        <div class="cal-header">
            <button class="cal-nav">‹</button>
            <h2>Juni 2026</h2>
            <button class="cal-nav">›</button>
        </div>
        <div class="cal-grid">
            <div class="cal-day-name">Min</div>
            <div class="cal-day-name">Sen</div>
            <div class="cal-day-name">Sel</div>
            <div class="cal-day-name">Rab</div>
            <div class="cal-day-name">Kam</div>
            <div class="cal-day-name">Jum</div>
            <div class="cal-day-name">Sab</div>
            <div class="cal-day empty">-</div>
            <div class="cal-day">1</div>
            <div class="cal-day">2</div>
            <div class="cal-day">3</div>
            <div class="cal-day">4</div>
            <div class="cal-day">5</div>
            <div class="cal-day">6</div>
            <div class="cal-day">7</div>
            <div class="cal-day">8</div>
            <div class="cal-day">9</div>
            <div class="cal-day">10</div>
            <div class="cal-day">11</div>
            <div class="cal-day">12</div>
            <div class="cal-day">13</div>
            <div class="cal-day">14</div>
            <div class="cal-day has-booking">15</div>
            <div class="cal-day">16</div>
            <div class="cal-day">17</div>
            <div class="cal-day">18</div>
            <div class="cal-day">19</div>
            <div class="cal-day has-booking">20</div>
            <div class="cal-day">21</div>
            <div class="cal-day today">22</div>
            <div class="cal-day">23</div>
            <div class="cal-day">24</div>
            <div class="cal-day has-booking">25</div>
            <div class="cal-day">26</div>
            <div class="cal-day">27</div>
            <div class="cal-day has-booking">28</div>
            <div class="cal-day">29</div>
            <div class="cal-day">30</div>
        </div>
    </div>
    <div class="events" style="margin-top:24px;">
        <h3 style="font-size:20px;font-weight:bold;margin-bottom:16px;">Jadwal Booking</h3>
        <div class="event-card">
            <h4>🏀 Giant Arena Court</h4>
            <p>📅 25 Juni 2026 &nbsp; ⏰ 08:00 - 10:00</p>
        </div>
        <div class="event-card">
            <h4>🏟️ Basket House</h4>
            <p>📅 28 Juni 2026 &nbsp; ⏰ 16:00 - 18:00</p>
        </div>
    </div>
</div>
@endsection