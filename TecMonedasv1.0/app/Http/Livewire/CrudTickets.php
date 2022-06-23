<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Ticket;

class CrudTickets extends Component
{
    public $buscador='';
    public $tickets, $id_ticket, $invoice, $type, $expiration, $status;
    public $isModalOpen = 0;
    
    public function mount() {
        $this->tickets = Ticket::all();
    }

    public function render()
    {
        return view('livewire.crud-tickets');
    }

    public function buscar() {
        $this->tickets = Ticket::where('invoice','like','%'.$this->buscador.'%')->get();
    }

    public function refresh() {
        return redirect(route('admin.view'));
    }

    //CRUD
    public function create()
    {
        $this->resetCreateForm();
        $this->openModalPopover();
    }
    public function openModalPopover()
    {
        $this->isModalOpen = true;
    }
    public function closeModalPopover()
    {
        $this->isModalOpen = false;
    }
    private function resetCreateForm(){
        $this->invoice = '';
        $this->type = '';
        $this->expiration = '';
        $this->status = '';
    }
    
    public function store()
    {
        $this->validate([
            'invoice' => 'required',
            'type' => 'required',
            'expiration' => 'required',
            'status' => 'required',
        ]);
    
        Ticket::updateOrCreate(['id' => $this->ticket_id], [
            'invoice' => $this->invoice,
            'type' => $this->type,
            'expiration' => $this->expiration,
            'status' => $this->status,
        ]);
        session()->flash('message', $this->ticket_id ? 'Ticket actualizado.' : 'Ticket creado.');
        $this->closeModalPopover();
        $this->resetCreateForm();
    }
    public function edit($id)
    {
        $ticket = Ticket::findOrFail($id);
        $this->ticket_id = $id;
        $this->invoice = $ticket->invoice;
        $this->type = $ticket->type;
        $this->expiration = $ticket->expiration;
        $this->status = $ticket->status;
    
        $this->openModalPopover();
    }
    
    public function delete($id)
    {
        Ticket::find($id)->delete();
        session()->flash('message', 'Ticket borrado.');
    }
}
