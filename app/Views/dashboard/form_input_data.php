<!-- Modal -->

<div id="modal" class="fixed inset-0 hidden z-50 overflow-y-auto">
    <div class="flex items-center justify-center min-h-screen px-4">
      <div class="fixed inset-0 transition-opacity">
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
      </div>
      <div class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full">
        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
          <div class="sm:flex sm:items-start">
            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
              <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                Form Input Data Serah Terima
              </h3>
              <div class="mt-2">
                <form action="<?= base_url('serah_terima/store') ?>" method="post">
                  <?= csrf_field() ?>

                  <div class="mb-4">
                    <label for="id_serah_terima" class="block text-gray-700">ID Barang</label>
                    <input type="text" name="id_serah_terima" id="id_serah_terima"
                      class=" px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                      required>
                  </div>

                  <div class="mb-4">
                    <label for="posisi" class="block text-gray-700">Posisi</label>
                    <input type="text" name="posisi" id="posisi"
                      class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                      required>
                  </div>

                  <div class="mb-4">
                    <label for="status_barang" class="block text-gray-700">Status</label>
                    <input type="text" name="status_barang" id="status_barang"
                      class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                      required>
                  </div>

                  <div class="mb-4">
                    <label for="waktu_penerimaan" class="block text-gray-700">Waktu Terima</label>
                    <input type="datetime-local" name="waktu_penerimaan" id="waktu_penerimaan"
                      class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                      required>
                  </div>

                  <div class="mt-5 sm:mt-6 sm:flex sm:flex-row-reverse">
                    <button type="submit"
                      class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-500 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">
                      Simpan
                    </button>
                    <button type="button" onclick="toggleModal()"
                      class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 sm:mt-0 sm:w-auto sm:text-sm">
                      Batal
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>