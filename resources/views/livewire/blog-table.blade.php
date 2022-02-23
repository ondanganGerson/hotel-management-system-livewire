<div>
    <!-- page content -->
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="dashboard_graph">
                <div class="row x_title">
                    <div class="col-md-6">
                        <h3>Client Information</h3>
                    </div>
                </div>
                <div class="row">

                    <!-- Button trigger modal -->

                    <button type="button" wire:click="createClient" class="btn btn-primary ml-3 btn-sm"
                        data-keyboard="false">
                        <i class="glyphicon glyphicon-plus"></i>&nbsp Add Client Information
                    </button>
                    <div class="btn btn-success btn-sm">
                        <button wire:click="printExcel" class="fa fa-print" title="print">excel</button>
                    </div>


                    <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                            <div class="x_content">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card-box table-responsive">
                                            <div id="branch_table" class="display">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <table id="clientTable"
                                                            class="table table-striped table-bordered dt-responsive nowrap dataTable no-footer dtr-inline collapsed"
                                                            cellspacing="0" width="100%" role="grid"
                                                            aria-describedby="datatable-responsive_info"
                                                            style="width: 100%;">
                                                            <thead class="text-center align-middle">
                                                                <tr role="row">
                                                                    <th>Title</th>
                                                                    <th>description</th>

                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @forelse ($posts as $client)
                                                                    <tr>
                                                                        <td>{{ $client->title }}</td>
                                                                        <td>{{ $client->description }}</td>

                                                                        <td class="text-center align-middle">
                                                                            <div class="btn-group">

                                                                                <button
                                                                                    wire:click="editClient({{ $client->id }})"
                                                                                    class="btn btn-info delete-header m-1 btn-sm"
                                                                                    title="Edit"><i
                                                                                        class="glyphicon glyphicon-pencil"
                                                                                        small></i>Edit</button>

                                                                                <button
                                                                                    wire:click="deleteConfirmClient({{ $client->id }})"
                                                                                    class="btn btn-danger delete-header m-1 btn-sm"
                                                                                    title="Delete"><i
                                                                                        class="glyphicon glyphicon-trash"
                                                                                        small></i>Delete</button>

                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                @empty
                                                                    <tr>
                                                                        <td colspan="4">No Record Found</td>
                                                                    </tr>
                                                                @endforelse
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end sa table row--->

                </div>
            </div>
        </div>

    </div>
    <!-- /page content -->

    <!-- The Modal -->
    {{-- <div class="modal fade" id="clientModal" tabindex="-1" role="dialog" aria-labelledby="clientModal" aria-hidden="true" data-backdrop="static" data-keyboard="false">
      <div class="modal-dialog" role="document">
          <livewire:client-form />
      </div>
  </div> --}}
</div>
@section('custom_script')
@endsection
